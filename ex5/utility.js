function validate() {
    let validationFailed = true;
    if (validationFailed) {
        alert("validation failed false");
        event.preventDefault();
        return false;
    }

    alert("validations passed");
    return true;
}
