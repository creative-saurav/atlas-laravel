<script>
    var slider = document.getElementById('price-slider');

    noUiSlider.create(slider, {
        start: [0, 1000], // Initial range values
        connect: true,
        range: {
            'min': 0,
            'max': 1000
        },
        tooltips: [true, true], // Show tooltips for both handles
        format: {
            to: function (value) {
                return '{{currency()}}' + value.toFixed(0); // Add currency symbol
            },
            from: function (value) {
                return Number(value.replace('{{currency()}}', ''));
            }
        }
    });

    slider.noUiSlider.on('update', function (values, handle) {
        document.getElementById('min-price').value = values[0];
        document.getElementById('max-price').value = values[1];
    });

    var slider = document.getElementById('mileage-slider');
    noUiSlider.create(slider, {
        start: [0, 1000], // Initial range values
        connect: true,
        range: {
            'min': 0,
            'max': 1000
        },
        tooltips: [true, true], // Show tooltips for both handles
        format: {
            to: function (value) {
                return value.toFixed(0); // Add currency symbol
            },
            from: function (value) {
                return Number(value.replace('$', ''));
            }
        }
    });
    slider.noUiSlider.on('update', function (values, handle) {
        document.getElementById('min-mileage').value = values[0];
        document.getElementById('max-mileage').value = values[1];
    });
</script>