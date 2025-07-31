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