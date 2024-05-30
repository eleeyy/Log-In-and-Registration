document.addEventListener("DOMContentLoaded", function() {
    const barangays = {
        marikina: ["Parang", "Malanday", "Kalumpang", "Fortune", "Nangka", "Marikina Heights", "Sta. Elena", 
                    "San Roque", "Concepcion Uno", "Concepcion Dos", "Industrial Valley Complex", "Jesus Dela Peña", "Barangka", "Santo Niño", "Tañong", "Tumana"],
        pasig: ["Bagong Ilog", "Bagong Katipunan", "Bambang", "Buting", "Caniogan", "Dela Paz", "Kalawaan", "Kapasigan", "Kapitolyo", "Malinao", "Manggahan", "Maybunga", "Oranbo", "Palatiw", "Pinagbuhatan", 
                "Pineda", "Rosario", "Sagad", "San Antonio", "San Joaquin", "San Jose", "San Nicolas"],
        quezon: ["Alicia", "Damar", "Del Monte", "Lourdes", "Katipunan", "Manresa", "Paraiso", "San Jose", "Batasan Hills", "Payatas"],
        taguig: ["Bagumbayan", "Hagonoy", "Ibayo Tipas", "Lower Bicutan", "Napindan", "Katuparan", "Fort Bonifacio", "Upper Bicutan", "Western Bicutan", "San Miguel"],
        navotas: ["Navotas East", "Navotas West", "Bagumbayan North", "Daanghari", "San Jose", "San Roque", "Tangos North", "Tangos South", "Bagumbayan South", "Bangkulasi"]
    };

    const cityDropdown = document.getElementById("city");
    const barangayDropdown = document.getElementById("brgy");
    const form = document.querySelector("form");

    // DROPDOWN FOR CITY
    for (const city in barangays) {
        const option = document.createElement("option");
        option.text = city.replace(/^\w/, c => c.toUpperCase()); 
        option.value = city;
        cityDropdown.appendChild(option);
    }

    // DROPDOWN FOR BARANGAY BASED ON SELECTED CITY
    function populateBarangayDropdown(selectedCity) {
        barangayDropdown.innerHTML = '<option value="" disabled selected>Select Barangay</option>';

        barangays[selectedCity].forEach(function(barangay) {
            const option = document.createElement("option");
            option.text = barangay;
            option.value = barangay;
            barangayDropdown.appendChild(option);
        });
    }

    cityDropdown.addEventListener("change", function() {
        const selectedCity = this.value;
        populateBarangayDropdown(selectedCity);
    });

    function displayError(input, message) {
        const errorSpan = input.parentElement.querySelector('.error-message');
        if (errorSpan) {
            errorSpan.textContent = message;
        } else {
            const span = document.createElement('span');
            span.classList.add('error-message');
            span.textContent = message;
            input.parentElement.appendChild(span);
        }
    }

    function removeError(input) {
        const errorSpan = input.parentElement.querySelector('.error-message');
        if (errorSpan) {
            input.parentElement.removeChild(errorSpan);
        }
    }

    form.addEventListener('submit', function(event) {
        let isValid = true;

        const inputs = form.querySelectorAll('input[required], select[required]');
        inputs.forEach(function(input) {
            if (!input.value.trim()) {
                displayError(input, 'This field is required');
                isValid = false;
            } else {
                removeError(input);
            }
        });

        const cpno = document.getElementById('cpno');
        if (!/^09\d{9}$/.test(cpno.value.trim())) {
            isValid = false;
        } else {
            removeError(cpno);
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});
