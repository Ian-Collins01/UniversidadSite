document.addEventListener("DOMContentLoaded", function() {
    let companySelect = document.getElementById("company_id");
    let departmentSelect = document.getElementById("department_id");

    function filterDepartments() {
        let selectedCompany = companySelect.value;

        Array.from(departmentSelect.options).forEach(option => {
            if (option.value === "") {
                option.hidden = false;
            } else {
                option.hidden = option.getAttribute("data-company") !== selectedCompany;
            }
        });

        departmentSelect.value = "";
    }

    companySelect.addEventListener("change", filterDepartments);
    filterDepartments();
});