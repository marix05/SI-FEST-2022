// Wait until document is ready
$(document).ready(function () {
    var contentnavsSwiper = new Swiper(".content_navs_swiper", {
        effect: "coverflow",
        direction: "horizontal",
        centeredSlides: true,
        allowTouchMove: true,
        slidesPerView: "auto",
        slideToClickedSlide: true,
        initialSlide: "2",
        coverflowEffect: {
            rotate: 0,
            stretch: 100,
            depth: 200,
            modifier: 1,
            slideShadows: true,
        },
    });

    const competition = [
        {
            title: "Photography",
            description:
                "Photography Competition merupakan kompetisi dalam bidang multimedia, dimana potretan terbaik dari para peserta akan dinilai dalam berbagai aspek untuk mendapatkan foto terbaik dari yang terbaik.",
            img: "assets/img/icon/photography.png",
            button: "/competition/photography",
            regis: "/registration/photography",
        },
        {
            title: "Business Plan",
            description:
                "Business Plan Competition merupakan kompetisi merancang perencanaan bisnis, untuk menggambarkan bentuk bisnis, strategi penjualan dan pemasaran secara rinci, kondisi keuangan, dan pendapatan serta pengeluaran selama bisnis dijalankan dengan memanfaatkan kemajuan teknologi.",
            img: "assets/img/icon/business_plan.png",
            button: "/competition/businessplan",
            regis: "/registration/businessplan",
        },
        {
            title: "UIUX Design",
            description:
                "UIUX Design Competition merupakan kompetisi merancang user interace sekaligus user experience sebuah aplikasi berbasis mobile ataupun web.",
            img: "assets/img/icon/uiux_design.png",
            button: "/competition/uiuxdesign",
            regis: "/registration/uiuxdesign",
        },
        {
            title: "Valorant",
            description:
                "Valorant Competition merupakan kompetisi dalam bidang E-sport dimana Valorant sebagai game FPS 5v5 dikompetisikan untuk mendapatkan tim yang mampu mengalahkan tim lainnya. Tim yang mencapai poin kemenangan terlebih dahulu menjadi pemenangnya",
            img: "assets/img/icon/valorant.png",
            button: "/competition/valorant",
            regis: "/registration/valorant",
        },
        {
            title: "Mobile Legends",
            description:
                "Mobile Legends Competition merupakan kompetisi dalam bidang E-sport dimana Mobile Legends sebagai game multiplayer online battle arena dikompetisikan, tim yang dapat menghacurkan base musuh lainnya menjadi pemenangnya.",
            img: "assets/img/icon/mobile_legends.png",
            button: "/competition/mobilelegends",
            regis: "/registration/mobilelegends",
        },
    ];

    let title_compe = document.querySelector("#title_compe");
    let desc_compe = document.querySelector("#desc_compe");
    let img_compe = document.querySelector("#img_compe");
    let btn_compe = document.querySelector("#btn_compe");
    let btn_regis = document.querySelector("#btn_regis");
    contentnavsSwiper.on("activeIndexChange", () => {
        const data = competition[contentnavsSwiper.activeIndex];
        title_compe.textContent = data.title;
        desc_compe.textContent = data.description;
        img_compe.setAttribute("src", data.img);
        btn_compe.setAttribute("href", data.button);
        btn_regis.setAttribute("href", data.regis);
    });

    // Card accordion
    $(".card_header").click(function () {
        // self clicking close
        if ($(this).hasClass("active")) {
            $(this).next(".card_body").slideUp();
            $(this).removeClass("active");
            $(this).children("i").addClass("fa-plus").removeClass("fa-minus");
        } else {
            $(".card .card_body").slideUp();
            $(".card .card_header").removeClass("active");
            $(".card .card_header i")
                .addClass("fa-plus")
                .removeClass("fa-minus");
            $(this).next(".card_body").slideDown();
            $(this).addClass("active");
            $(this).children("i").removeClass("fa-plus").addClass("fa-minus");
        }
    });
});
