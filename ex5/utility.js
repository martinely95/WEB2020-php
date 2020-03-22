function validate() {
    let validationFailed = true;
    if (validationFailed) {
        document.getElementById("inputValidationResult").innerText = "validation failed";
        return false;
    }

    document.getElementById("inputValidationResult").innerText = "validations passed";
    return true;
}
