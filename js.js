// // ==== SIMPLE TABS ====
// const tabs = document.querySelectorAll(".tab");
// const contents = document.querySelectorAll(".content");

// tabs.forEach(tab => {
//     tab.onclick = () => {
//         document.querySelector(".tab.active").classList.remove("active");
//         document.querySelector(".content.active").classList.remove("active");

//         tab.classList.add("active");
//         document.querySelector(tab.dataset.target).classList.add("active");
//     };
// });

// // ==== SIMPLE MODAL (without window) ====
// const modal = document.getElementById("modal");
// const openBtn = document.getElementById("openModal");
// const closeBtn = document.getElementById("closeModal");

// // ouvrir le modal
// if (openBtn) openBtn.onclick = () => modal.style.display = "flex";

// // fermer le modal
// if (closeBtn) closeBtn.onclick = () => modal.style.display = "none";
