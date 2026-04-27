document.addEventListener('DOMContentLoaded', () => {
  const root = document.querySelector('[data-kontakt-flow]');
  const recaptchaSiteKey = '6LeprhIsAAAAAGkqJca9uk0UYotEJNTuLrCgqQMt';
  if (!root) return;

  const form = root.querySelector('[data-kontakt-form]');
  const successBox = root.querySelector('[data-kontakt-success]');
  const progressLabel = root.querySelector('[data-progress-label]');
  const progressFill = root.querySelector('[data-progress-fill]');
  const backButtons = Array.from(root.querySelectorAll('[data-action="back"]'));
  const optionButtons = Array.from(root.querySelectorAll('.kontakt-option'));
  const hint = root.querySelector('[data-form-hint]');
  const submitButton = root.querySelector('[data-submit-button]');

  if (!form || !successBox || !progressLabel || !progressFill) return;

  const hiddenFields = {
    companyType: root.querySelector('input[name="company_type"]'),
    primaryGoal: root.querySelector('input[name="primary_goal"]'),
    readiness: root.querySelector('input[name="readiness"]'),
    budget: root.querySelector('input[name="budget"]')
  };

  const steps = [
    {
      key: 'companyType',
      node: root.querySelector('[data-step="1"]'),
      type: 'choice'
    },
    {
      key: 'primaryGoal',
      node: root.querySelector('[data-step="2"]'),
      type: 'choice'
    },
    {
      key: 'readiness',
      node: root.querySelector('[data-step="3"]'),
      type: 'choice'
    },
    {
      key: 'budget',
      node: root.querySelector('[data-step="4"]'),
      type: 'choice'
    },
    {
      key: 'contact',
      node: root.querySelector('[data-step="5"]'),
      type: 'final'
    }
  ].filter(step => step.node);

  const totalSteps = steps.length;

  const state = {
    currentStep: 0,
    companyType: '',
    primaryGoal: '',
    readiness: '',
    budget: ''
  };

  function updateProgress() {
    const currentHumanStep = state.currentStep + 1;
    progressLabel.textContent = `Frage ${currentHumanStep}/${totalSteps}`;
    progressFill.style.width = `${(currentHumanStep / totalSteps) * 100}%`;
  }

  function updateStepVisibility() {
    steps.forEach((step, index) => {
      step.node.classList.toggle('is-active', index === state.currentStep);
    });
  }

  function updateBackButtons() {
    backButtons.forEach((button) => {
      button.hidden = state.currentStep === 0;
    });
  }

  function updateOptionStates() {
    optionButtons.forEach((button) => {
      const key = button.dataset.key;
      const value = button.dataset.value;
      button.classList.toggle('is-selected', state[key] === value);
    });
  }

  function updateHiddenFields() {
    Object.entries(hiddenFields).forEach(([key, field]) => {
      if (field) field.value = state[key] || '';
    });
  }

  function updateUI() {
    updateStepVisibility();
    updateProgress();
    updateBackButtons();
    updateOptionStates();
    updateHiddenFields();
  }

  function goToStep(index) {
    if (index < 0 || index > totalSteps - 1) return;
    state.currentStep = index;
    updateUI();
  }

  optionButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const key = button.dataset.key;
      const value = button.dataset.value;
      const alreadySelected = state[key] === value;

      state[key] = alreadySelected ? '' : value;
      updateUI();

      if (!alreadySelected && state.currentStep < totalSteps - 1) {
        window.setTimeout(() => {
          goToStep(state.currentStep + 1);
        }, 180);
      }
    });
  });

  backButtons.forEach((button) => {
    button.addEventListener('click', () => {
      goToStep(state.currentStep - 1);
    });
  });

  function loadRecaptchaScript() {
    return new Promise((resolve, reject) => {
      if (window.grecaptcha) return resolve();

      const script = document.createElement('script');
      script.src = `https://www.google.com/recaptcha/api.js?render=${recaptchaSiteKey}`;
      script.async = true;
      script.defer = true;
      script.onload = resolve;
      script.onerror = reject;

      document.head.appendChild(script);
    });
  }

  async function getRecaptchaToken() {
    await loadRecaptchaScript();

    return new Promise((resolve, reject) => {
      grecaptcha.ready(async () => {
        try {
          const token = await grecaptcha.execute(recaptchaSiteKey, { action: 'kontakt_submit' });
          resolve(token);
        } catch (error) {
          reject(error);
        }
      });
    });
  }

  form.addEventListener('submit', async (event) => {
    event.preventDefault();

    if (hint) hint.textContent = '';

    const formData = new FormData(form);

    const requiredAnswers = ['company_type', 'primary_goal', 'readiness', 'budget'];
    const missingAnswer = requiredAnswers.some((field) => {
      return !String(formData.get(field) || '').trim();
    });

    if (missingAnswer) {
      if (hint) {
        hint.textContent = 'Bitte vervollständigen Sie zuerst alle vorherigen Schritte.';
      }
      return;
    }

    const firstName = String(formData.get('first_name') || '').trim();
    const lastName = String(formData.get('last_name') || '').trim();
    const email = String(formData.get('email') || '').trim();
    const projectNote = String(formData.get('project_note') || '').trim();
    const privacyAccepted = formData.get('privacy');

    if (!firstName || !lastName || !email || !projectNote || !privacyAccepted) {
      if (hint) {
        hint.textContent = 'Bitte füllen Sie alle Felder aus und bestätigen Sie den Datenschutz.';
      }
      return;
    }

    if (submitButton) {
      submitButton.disabled = true;
      submitButton.textContent = 'Wird gesendet...';
    }

    try {
      const recaptchaToken = await getRecaptchaToken();
      formData.set('g-recaptcha-response', recaptchaToken);

      const response = await fetch(form.action, {
        method: 'POST',
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'Accept': 'application/json'
        },
        body: formData
      });

      let data = null;

      try {
        data = await response.json();
      } catch (jsonError) {
        throw new Error('Die Serverantwort war ungültig.');
      }

      if (!response.ok || !data.success) {
        throw new Error(data.message || 'Die Anfrage konnte nicht gesendet werden.');
      }

      form.reset();

      state.currentStep = 0;
      state.companyType = '';
      state.primaryGoal = '';
      state.readiness = '';
      state.budget = '';

      updateUI();

      form.classList.add('is-hidden');
      successBox.classList.add('is-visible');
    } catch (error) {
      if (hint) {
        hint.textContent = error.message || 'Es ist ein Fehler aufgetreten. Bitte versuchen Sie es erneut.';
      }

      if (submitButton) {
        submitButton.disabled = false;
        submitButton.textContent = 'Eignung prüfen';
      }
    }
  });

  updateUI();
});