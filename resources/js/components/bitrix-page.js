if (document.querySelector(".tabs-block")) {
    const tabsBlock = document.querySelector(".tabs-block");
    const tabs = tabsBlock.querySelectorAll(".tab");
    const tabItems = tabsBlock.querySelectorAll(".tab__item");
  
    tabs.forEach((tab) =>
      tab.addEventListener("click", function (e) {
        tabs.forEach((tab) => {
          tab.classList.remove("active");
          tab.classList.add("default");
        });
  
        tab.classList.toggle("active");
        tab.classList.toggle("default");
  
        const dataTab = e.target.dataset.tab;
  
        tabItems.forEach((item) => {
          if (item.classList.contains(dataTab)) {
            item.classList.remove("hidden");
            item.classList.add("flex");
          } else {
            item.classList.add("hidden");
            item.classList.remove("flex");
          }
        });
      })
    );
  }
  
  if (document.querySelector(".tarif-item")) {
    const items = document.querySelectorAll(".tarif-item");
    items.forEach((item) => {
      const btn = item.querySelector(".show-services");
      const services = item.querySelector(".services");
  
      btn.addEventListener("click", function () {
        services.classList.toggle("hidden");
        services.classList.toggle("flex");
      });
    });
  }
  
  if (document.querySelector(".tarifs")) {
    const tarifs = document.querySelector(".tarifs");
    const btns = tarifs.querySelectorAll(".switch__btn");
    const percent = tarifs.querySelector(".switch__percent span");
    const itemsTarif = tarifs.querySelectorAll(".price-block");
    const itemsPrice = Array.from(itemsTarif).map((item) => {
      return item.querySelector(".price").textContent;
    });
  
    let flag = 0;
  
    btns.forEach((btn) =>
      btn.addEventListener("click", function (e) {
        flag = !flag ? 1 : 0;
        btns.forEach((btn) => btn.classList.remove("toggle"));
        btn.classList.toggle("toggle");
        showDiscount();
      })
    );
  
    function showDiscount() {
      itemsTarif.forEach((item, i) => {
        const oldPrice = item.querySelector(".old-price");
        const price = item.querySelector(".price");
        const discount = item.querySelector(".discount");
  
        const priceNum = Number(price.textContent.replace(" ", ""));
        const discountPrice = String(
          priceNum - (priceNum * Number(percent.textContent)) / 100
        );
        const result =
          discountPrice.slice(0, -3) +
          " " +
          discountPrice.replace(discountPrice.at(-1), 0).slice(-3);
  
        if (flag) {
          oldPrice.textContent = price.textContent;
          discount.textContent = `-${percent.textContent}%`;
          discount.classList.add("inline-block");
          discount.classList.remove("hidden");
          price.textContent = result;
        } else {
          oldPrice.textContent = "";
          discount.classList.remove("inline-block");
          discount.classList.add("hidden");
          price.textContent = itemsPrice[i];
        }
      });
    }
  }
  