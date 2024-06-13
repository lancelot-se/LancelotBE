document.addEventListener('DOMContentLoaded', function () {
    const radio = document.getElementById('toggleable-radio');

    radio.addEventListener('click', function (event) {
        if (radio.checked) {
            // Delay the uncheck to allow the default behavior to happen first
            setTimeout(() => {
                radio.checked = false;
            }, 0);
        }
    });
});