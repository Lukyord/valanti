jQuery(function ($) {
    $(".select2.with-others").each(function () {
        $(".select2.with-others").change(function () {
            var inputWrapper = $(this).closest(".input.with-select");
            if ($(this).val() === "others") {
                inputWrapper
                    .find(".select-others")
                    .css("display", "block")
                    .focus(); // Switch to input and focus
                inputWrapper.find(".select").css("display", "none");
            } else {
                // Hide the input field if it's not 'others'
                inputWrapper.find(".select-others").css("display", "none");
                inputWrapper.find(".select").css("display", "block");
            }
        });

        $(".trigger-dropdown").click(function () {
            var inputWrapper = $(this).closest(".input.with-select");
            var selectElement = inputWrapper.find(".select2.with-others");

            // Toggle the display based on the current state
            if (selectElement.val() === "others") {
                inputWrapper.find(".select-others").css("display", "none");
                inputWrapper.find(".select").css("display", "block");
                selectElement.val("").trigger("change");
                selectElement.select2("open");
            } else {
                selectElement.select2("open");
            }
        });
    });
});
