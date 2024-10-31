document.addEventListener("DOMContentLoaded", function () {
  const phoneInput = document.getElementById("phonenum");

  phoneInput.addEventListener("input", function () {
    // Loại bỏ các ký tự không phải là số
    phoneInput.value = phoneInput.value.replace(/[^0-9]/g, "");

    // Giới hạn đầu vào tối đa 10 ký tự
    if (phoneInput.value.length > 10) {
      phoneInput.value = phoneInput.value.slice(0, 10);
    }
  });
});
