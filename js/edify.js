"use strict";

let banner = document.getElementById('after_banner');
if (banner) {
    setTimeout(() => {
        banner.scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
    }, 500);
}

const show_active_nav = () => {
    let main_navbar = document.getElementById('main_navbar');
    let href = location.pathname;
    if (href.toString().lastIndexOf('.') === -1) {
        document.querySelector('.home_menu_link').classList.add('active');
    }
    else {
        let current_page = href.split('/').reverse()[0];
        /* console.log('current_page: ', current_page); */
        let navItems = document.querySelectorAll('.nav-item');
        for (const item in navItems) {
            if (navItems.hasOwnProperty(item)) {
                const navItem = navItems[item];
                let itemHref = navItem.getAttribute('data-href');
                if (itemHref == current_page) {
                    navItem.classList.add('active');
                }
            }
        }
        let dropItems = document.querySelectorAll('.dropdown-item');
        for (const item in dropItems) {
            if (dropItems.hasOwnProperty(item)) {
                const navLink = dropItems[item];
                let attrHref = navLink.getAttribute('data-href');
                /* console.log('page_arr: ', attrHref); */
                if (attrHref == current_page) {
                    navLink.classList.add('active');
                    navLink.closest('li').classList.add('active');
                }
            }
        }
    }
}

let lightGallery = ['#lightGallery', '#lightGallery1', '#lightGallery2'];
lightGallery.forEach(element => {
    if ($(element).length) {
        $(document).ready(function () {
            $(element).lightGallery();
        });
    }
});