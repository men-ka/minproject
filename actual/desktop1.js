var techniques_box= document.getElementById("techniques_box");
      if (techniques_box) {
        techniques_box.addEventListener("click", function (e) {
          window.location.href = "techniques1.html";
        });
      }
      
      var aboutUsText = document.getElementById("aboutUsText");
      if (aboutUsText) {
        aboutUsText.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='aBOUTUSText']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var categoriesText = document.getElementById("categoriesText");
      if (categoriesText) {
        categoriesText.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='cATEGORIESText']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }
      
      var frameContainer = document.getElementById("frameContainer");
      if (frameContainer) {
        frameContainer.addEventListener("click", function (e) {
          // Please sync "login" to the project
        });
      }
      
      var goup = document.getElementById("upp");
      if (upp) {
        upp.addEventListener("click", function () {
          var anchor = document.querySelector("[data-scroll-to='logopng1Image']");
          if (anchor) {
            anchor.scrollIntoView({ block: "start", behavior: "smooth" });
          }
        });
      }


    // copied
      const formOpenBtn = document.querySelector("#form-open"),
      home = document.querySelector(".home"),
      formContainer = document.querySelector(".form_container"),
      formCloseBtn = document.querySelector(".form_close"),
      signupBtn = document.querySelector("#signup"),
      loginBtn = document.querySelector("#login"),
      pwShowHide = document.querySelectorAll(".pw_hide");

      formOpenBtn.addEventListener("click", () => home.classList.add("show"));
      formCloseBtn.addEventListener("click", () => home.classList.remove("show"));

        pwShowHide.forEach((icon) => {
        icon.addEventListener("click", () => {
          let getPwInput = icon.parentElement.querySelector("input");
          if (getPwInput.type === "password") {
            getPwInput.type = "text";
            icon.classList.replace("uil-eye-slash", "uil-eye");
          } else {
            getPwInput.type = "password";
            icon.classList.replace("uil-eye", "uil-eye-slash");
          }
        });
       });

        signupBtn.addEventListener("click", (e) => {
          e.preventDefault();
          formContainer.classList.add("active");
        });
        loginBtn.addEventListener("click", (e) => {
          e.preventDefault();
          formContainer.classList.remove("active");
        });
