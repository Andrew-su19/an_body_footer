// Manh_header
document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search");
    const backToTop = document.getElementById("backToTop");

    if (searchInput) {
        searchInput.addEventListener("keyup", function () {
            let filter = this.value.toLowerCase();
            let products = document.querySelectorAll(".sanpham");
            let firstMatch = null;

            products.forEach(product => {
                let text = product.innerText.toLowerCase();
                let match = text.includes(filter);

                product.style.display = match ? "" : "none";

                if (match && !firstMatch) firstMatch = product;
            });

            // Cuộn xuống sản phẩm đầu tiên khớp
            if (firstMatch && filter.trim() !== "") {
                firstMatch.scrollIntoView({ behavior: "smooth", block: "center" });
            }
        });
    }

    if (backToTop) {
        backToTop.addEventListener("click", () => {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const backToTop = document.getElementById("backToTop");

    window.addEventListener("scroll", () => {
        if (window.scrollY > 200) {
            backToTop.style.display = "block";
        } else {
            backToTop.style.display = "none";
        }
    });

    backToTop.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
});



//Tu_body
var cheDo = true;
function doiCheDo() {
  if (cheDo) {
    document.getElementsByTagName("body")[0].style = "background-color: black";
    document.getElementsByClassName('ten')[0].style = "color: white";
    document.getElementsByClassName('ten')[0], innerHTML = "Chế độ tối";
    cheDo = false;
  }
  else {
    document.getElementsByTagName("body")[0].style = "background-color: white";
    document.getElementsByClassName('ten')[0].style = "color: black";
    document.getElementsByClassName('ten')[0], innerHTML = "Chế độ sáng";
    cheDo = true;
  }
}

function xemMoTa(isMove) {
    if (isMove) {
        document.getElementsByClassName("mota")[0].style = "display: block";
    } else {
        document.getElementsByClassName("mota")[0].style = "display: none";

    }
}




//An_body_footer
const products = [
    {
        img: 'img-qc.png',
        imgg: 'superstar.png',
        url: 'https://www.adidas.com.vn/vi/giay-superstar/JI0079.html',
        price: '2.600.000đ',
        name: 'Adidas Superstar',
        desc: 'Giày thể thao Superstar biểu tượng huyền thoại'
    },
    {
        img: 'img-qc-1.png',
        imgg: 'samba.png',
        url: 'https://www.adidas.com.vn/vi/giay-samba-og/B75807.html',
        price: '2.700.000đ',
        name: 'Adidas Samba OG',
        desc: 'Giày Samba OG thiết kế cổ điển, phong cách đường phố'
    },
    {
        img: 'img-qc-2.png',
        imgg: 'spezial.png',
        url: 'https://www.adidas.com.vn/vi/giay-handball-spezial/IF6562.html',
        price: '2.500.000đ',
        name: 'Adidas Handball Spezial',
        desc: 'Giày Handball Spezial đế mềm, mang êm, phù hợp thể thao & lifestyle'
    }
];

// Mở popup
function openModal(index) {
    const product = products[index];
    document.getElementById('popup-img').src = product.img;
    document.getElementById('img-link').src = product.imgg;
    document.getElementById('popup-link').href = product.url;
    document.getElementById('popup-price').innerText = product.price;
    document.getElementById('popup-name').innerText = product.name;
    document.getElementById('popup-desc').innerText = product.desc;
    document.getElementById('popup').style.display = 'flex';
}

  // Đóng popup
function closeModal() {
    document.getElementById('popup').style.display = 'none';
}
