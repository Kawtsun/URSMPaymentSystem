// Toggle Radio Button upon checking the computerlab
function toggleRadioButtons() {
    const compLabCheckbox = document.getElementById('complab_checkbox');
    const radioButtons = document.getElementsByName('lab');

    for (let i = 0; i < radioButtons.length; i++) {
        radioButtons[i].disabled = !compLabCheckbox.checked;
        if (!compLabCheckbox.checked) {
            radioButtons[i].checked = false;
        }
    }
}