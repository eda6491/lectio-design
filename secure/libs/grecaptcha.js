grecaptcha.ready(function () {
  grecaptcha.execute('6LdBHd0rAAAAAKlpBe1jNaYUPUuMQYyOVYNq882p', { action: 'submit' })
    .then(function (token) {
      document.getElementById('recaptcha_token').value = token;
    });
});