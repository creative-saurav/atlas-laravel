
{{-- @if ($type == 'beauty')    
    @if(get_frontend_settings('map_position') == 'right')
        <style>
            .eRow {
                opacity: 1;
                overflow: hidden;
                height: auto;
            }
            .eShow {
                opacity: 0;
                height: 0; /* Allow the element to expand to its content's height */
                transition: opacity 0.5s ease, height 0.5s ease;

            }
        </style>
        <div class="sidebar-map-area eRow">
            <h3 class="title"> {{get_phrase('Map')}} </h3>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96787.6416438787!2d-74.08814081527689!3d40.70450246290132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1707113852002!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var checkboxes = document.querySelectorAll(".switch-checkbox");
                var eRows = document.querySelectorAll(".eRow");
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = false;
                });
                eRows.forEach(function(eRow) {
                    eRow.classList.remove("eShow");
                });
                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener("change", function() {
                        if (checkbox.checked) {
                            eRows.forEach(function(eRow) {
                                eRow.classList.add("eShow");
                                $("#right-map").removeClass('col-xl-8');
                                $("#right-map").addClass('col-xl-12');
                                $(".map-card").removeClass('col-sm-6');
                                $(".map-card").addClass('col-sm-4');
                            });
                        } else {
                            eRows.forEach(function(eRow) {
                                eRow.classList.remove("eShow");
                                $("#right-map").addClass('col-xl-8');
                                $("#right-map").removeClass('col-xl-12');
                                $(".map-card").removeClass('col-sm-4');
                                $(".map-card").addClass('col-sm-6');
                            });
                        }
                    });
                });
            });
        </script>
    @elseif (get_frontend_settings('map_position') == 'top')
        <style>
            .eRow {
                opacity: 0;
                height: 0;
                overflow: hidden;
                transition: opacity 0.5s ease, height 0.5s ease;
            }
            .eShow {
                opacity: 1;
                height: 400px;
                margin-bottom: 20px;  /* Allow the element to expand to its content's height */
            }
        </style>
        <div class="restaurant-map-area eRow">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41965.169369788455!2d-121.51762951146789!3d38.57800840836414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac672b28397f9%3A0x921f6aaa74197fdb!2sSacramento%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1707215131511!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var checkboxes = document.querySelectorAll(".switch-checkbox");
                var eRows = document.querySelectorAll(".eRow");
                // checkboxes.forEach(function(checkbox) {
                //     checkbox.checked = false;
                // });
                eRows.forEach(function(eRow) {
                    eRow.classList.remove("eShow");
                });
                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener("change", function() {
                        if (checkbox.checked) {
                            eRows.forEach(function(eRow) {
                                eRow.classList.remove("eShow");
                            });
                        } else {
                            eRows.forEach(function(eRow) {
                                eRow.classList.add("eShow");
                            });
                        }
                    });
                });
            });
        </script>
    @endif
@elseif ($type == 'car') --}}

@if ($type == 'car' && request()->is('listing/car/list') || $type == 'hotel' && request()->is('listing/hotel/list') || request()->is('listing/restaurant/list') )
    <style>
        .eRow {
            opacity: 0;
            height: 0;
            overflow: hidden;
            transition: opacity 0.5s ease, height 0.5s ease;
        }
        .eShow {
            opacity: 1;
            height: 400px;
            margin-bottom: 20px;  /* Allow the element to expand to its content's height */
        }
    </style>
    <div class="car-map-area eRow">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41965.169369788455!2d-121.51762951146789!3d38.57800840836414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac672b28397f9%3A0x921f6aaa74197fdb!2sSacramento%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1707215131511!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var checkboxes = document.querySelectorAll(".switch-checkbox");
            var eRows = document.querySelectorAll(".eRow");
            // checkboxes.forEach(function(checkbox) {
            //     checkbox.checked = false;
            // });
            eRows.forEach(function(eRow) {
                eRow.classList.remove("eShow");
            });
            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener("change", function() {
                    if (checkbox.checked) {
                        eRows.forEach(function(eRow) {
                            eRow.classList.remove("eShow");
                        });
                    } else {
                        eRows.forEach(function(eRow) {
                            eRow.classList.add("eShow");
                        });
                    }
                });
            });
        });
    </script>
@else
    @if(get_frontend_settings('map_position') == 'right')
        <style>
            .eRow {
                opacity: 1;
                overflow: hidden;
                height: auto;
            }
            .eShow {
                opacity: 0;
                height: 0; /* Allow the element to expand to its content's height */
                transition: opacity 0.5s ease, height 0.5s ease;

            }
        </style>
        <div class="sidebar-map-area eRow">
            <h3 class="title"> {{get_phrase('Listings on Map')}} </h3>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96787.6416438787!2d-74.08814081527689!3d40.70450246290132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1707113852002!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var checkboxes = document.querySelectorAll(".switch-checkbox");
                var eRows = document.querySelectorAll(".eRow");
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = false;
                });
                eRows.forEach(function(eRow) {
                    eRow.classList.remove("eShow");
                });
                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener("change", function() {
                        if (checkbox.checked) {
                            eRows.forEach(function(eRow) {
                                eRow.classList.add("eShow");
                                $("#right-map").removeClass('col-xl-8');
                                $("#right-map").addClass('col-xl-12');
                                $(".map-card").removeClass('col-sm-6');
                                $(".map-card").addClass('col-sm-4');
                            });
                        } else {
                            eRows.forEach(function(eRow) {
                                eRow.classList.remove("eShow");
                                $("#right-map").addClass('col-xl-8');
                                $("#right-map").removeClass('col-xl-12');
                                $(".map-card").removeClass('col-sm-4');
                                $(".map-card").addClass('col-sm-6');
                            });
                        }
                    });
                });
            });
        </script>
    @elseif (get_frontend_settings('map_position') == 'top')
        <style>
            .eRow {
                opacity: 0;
                height: 0;
                overflow: hidden;
                transition: opacity 0.5s ease, height 0.5s ease;
            }
            .eShow {
                opacity: 1;
                height: 400px;
                margin-bottom: 20px;  /* Allow the element to expand to its content's height */
            }
        </style>
        <div class="car-map-area eRow">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41965.169369788455!2d-121.51762951146789!3d38.57800840836414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac672b28397f9%3A0x921f6aaa74197fdb!2sSacramento%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1707215131511!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var checkboxes = document.querySelectorAll(".switch-checkbox");
                var eRows = document.querySelectorAll(".eRow");
                // checkboxes.forEach(function(checkbox) {
                //     checkbox.checked = false;
                // });
                eRows.forEach(function(eRow) {
                    eRow.classList.remove("eShow");
                });
                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener("change", function() {
                        if (checkbox.checked) {
                            eRows.forEach(function(eRow) {
                                eRow.classList.remove("eShow");
                            });
                        } else {
                            eRows.forEach(function(eRow) {
                                eRow.classList.add("eShow");
                            });
                        }
                    });
                });
            });
        </script>
    @endif
@endif

    
{{-- @endif --}}



