<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Our Services</title>

<style>

/* RESET */
* {
  box-sizing: border-box;
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}

body {
  margin: 0;
  min-height: 100vh;
  background: #e6e6e6;
  overflow-x: hidden;
}

/* PAGE WRAPPER */
.page-container {
  min-height: 100vh;
  padding: 140px 20px 60px;
  display: flex;
  flex-direction: column;
  align-items: center;
}

/* TITLE */
h1 {
  font-size: 1.8rem;
  color: #111;
  margin-bottom: 5px;
  text-align: center;
}

.subheading {
  font-size: 0.95rem;
  color: #666;
  letter-spacing: 1.5px;
  margin-bottom: 25px;
  text-transform: uppercase;
  text-align: center;
}

/* SERVICES WRAPPER */
.services-wrapper {
  display: flex;
  width: 85%;
  max-width: 1100px;
  gap: 20px;
}

/* LEFT DETAILS */
.service-details {
  flex: 2;
  background: #fff;
  padding: 30px;
  border-radius: 15px;
  min-height: 280px;
}

.service-details h3 {
  font-size: 1.3rem;
  color: #111;
  margin-bottom: 12px;
}

.service-details p {
  color: #555;
  line-height: 1.7;
  font-size: 0.95rem;
}

/* RIGHT MENU */
.service-menu {
  flex: 1;
  background: #fff;
  padding: 20px;
  border-radius: 15px;
  height: fit-content;
}

.service-menu h3 {
  font-size: 0.9rem;
  letter-spacing: 1.5px;
  margin-bottom: 15px;
  color: #333;
  text-transform: uppercase;
}

/* ITEMS */
.service-item {
  padding: 12px;
  margin-bottom: 10px;
  border-radius: 10px;
  cursor: pointer;
  background: #f3f3f3;
  font-weight: 600;
  font-size: 0.9rem;
  transition: 0.2s;
}

.service-item:hover {
  background: #e8e8ff;
}

.service-item.active {
  background: #381ab0;
  color: #fff;
}

/* FOOTER */
.contact-footer {
  margin-top: 40px;
  text-align: center;
  color: #333;
  font-size: 0.85rem;
}

/* RESPONSIVE */
@media (max-width: 900px) {
  .services-wrapper {
    flex-direction: column;
    width: 95%;
  }

  .service-details {
    order: 2;
  }

  .service-menu {
    order: 1;
  }
}

</style>
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="page-container">

  <div>
    <h1>OUR SERVICES</h1>
    <div class="subheading">Publishing, Rights & Royalty Management</div>
  </div>

  <!-- SERVICES -->
  <div class="services-wrapper">

    <!-- LEFT -->
    <div class="service-details" id="serviceDetails">
      <h3>Maximising Royalties</h3>
      <p>
        We ensure you receive every cent owed by tracking, collecting, and optimising your royalty streams across all platforms and territories.
      </p>
    </div>

    <!-- RIGHT -->
    <div class="service-menu">
      <h3>OUR SERVICES</h3>

      <div class="service-item active" onclick="showService(0)">Maximising Royalties</div>
      <div class="service-item" onclick="showService(1)">Rights Management</div>
      <div class="service-item" onclick="showService(2)">Licensing & Sync</div>
      <div class="service-item" onclick="showService(3)">Transparent Reporting</div>
      <div class="service-item" onclick="showService(4)">Personalised Support</div>

    </div>

  </div>

  <!-- FOOTER -->
  <footer class="contact-footer">
    <p>Copyright © 2022 Mokima Publishing. | All Rights Reserved.</p>
  </footer>

</div>

<script>

const services = [
  {
    title: "Maximising Royalties",
    text: "We ensure you receive every cent owed by tracking, collecting, and optimising your royalty streams across all platforms and territories."
  },
  {
    title: "Rights Management",
    text: "We manage your publishing rights, ensuring your intellectual property is protected and properly registered globally."
  },
  {
    title: "Licensing & Sync",
    text: "We place your music in film, TV, adverts, and digital media opportunities to generate additional revenue streams."
  },
  {
    title: "Transparent Reporting",
    text: "We provide clear, detailed royalty statements so you always understand your earnings and usage."
  },
  {
    title: "Personalised Support",
    text: "We work closely with each client to provide tailored publishing strategies and career guidance."
  }
];

function showService(index){
  const detail = document.getElementById("serviceDetails");

  detail.innerHTML = `
    <h3>${services[index].title}</h3>
    <p>${services[index].text}</p>
  `;

  document.querySelectorAll(".service-item").forEach((el,i)=>{
    el.classList.toggle("active", i === index);
  });
}

</script>

</body>
</html>