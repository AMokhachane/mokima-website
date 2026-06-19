<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Our Services</title>

<style>

/* RESET */
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"Segoe UI",Tahoma,Geneva,Verdana,sans-serif;
}

body{
    background:#e6e6e6;
    min-height:100vh;
    overflow-x:hidden;
}

/* PAGE */
.page-container{
    min-height:100vh;
    padding:140px 20px 80px;
    display:flex;
    flex-direction:column;
    align-items:center;
}

/* TITLE */
h1{
    font-size:3rem;
    font-weight:700;
    color:#111;
    text-align:center;
    margin-bottom:10px;
}



.subheading{
    font-size:1rem;
    color:#666;
    letter-spacing:3px;
    text-transform:uppercase;
    text-align:center;
    margin-bottom:50px;
}

/* SERVICES WRAPPER */
.services-wrapper{
    width:90%;
    max-width:1200px;
    display:flex;
    gap:30px;
    align-items:stretch;
}

/* LEFT PANEL */
.service-details{
    flex:2;
    background:#fff;
    border-radius:20px;
    padding:50px;
    min-height:380px;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
    transition:all .3s ease;
}

.service-details h3{
    font-size:2rem;
    color:#111;
    margin-bottom:20px;
}

.service-details p{
    color:#555;
    line-height:1.9;
    font-size:1.05rem;
}

/* RIGHT PANEL */
.service-menu{
    flex:1;
    background:#fff;
    border-radius:20px;
    padding:30px;
    height:fit-content;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
}

.service-menu h3{
    font-size:.9rem;
    letter-spacing:2px;
    color:#666;
    margin-bottom:25px;
    text-transform:uppercase;
}

/* SERVICE ITEMS */
.service-item{
    padding:16px 18px;
    margin-bottom:12px;
    border-radius:12px;
    cursor:pointer;
    font-weight:600;
    font-size:.95rem;
    background:#f5f5f5;
    color:#333;
    border-left:4px solid transparent;
    transition:all .3s ease;
}

.service-item:hover{
    background:#f0f0f0;
    border-left:4px solid #dceb0a;
    transform:translateX(5px);
}

.service-item.active{
    background:#BECA15;
    color:#fff;
    border-left:4px solid #9ca80f;
    box-shadow:0 8px 20px rgba(190,202,21,.35);
}

/* FOOTER */
.contact-footer{
    margin-top:60px;
    text-align:center;
    color:#444;
    font-size:.9rem;
}

/* ANIMATION */
.fade-in{
    animation:fadeIn .3s ease;
}

@keyframes fadeIn{
    from{
        opacity:0;
        transform:translateY(10px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

/* TABLET */
@media(max-width:900px){

    .services-wrapper{
        flex-direction:column;
        width:95%;
    }

    .service-menu{
        order:1;
    }

    .service-details{
        order:2;
        padding:35px;
        min-height:auto;
    }

    h1{
        font-size:2.4rem;
    }
}

/* MOBILE */
@media(max-width:600px){

    .page-container{
        padding-top:120px;
    }

    h1{
        font-size:2rem;
    }

    .subheading{
        font-size:.85rem;
        letter-spacing:2px;
    }

    .service-details{
        padding:25px;
    }

    .service-details h3{
        font-size:1.5rem;
    }

    .service-details p{
        font-size:.95rem;
    }
}

</style>
</head>

<body>

<?php include 'navbar.php'; ?>

<div class="page-container">

    <div>
        <h1>OUR SERVICES</h1>
        <div class="subheading">
            Publishing, Rights & Royalty Management
        </div>
    </div>

    <div class="services-wrapper">

        <!-- LEFT -->
        <div class="service-details fade-in" id="serviceDetails">
            <h3>Maximising Royalties</h3>
            <p>
                We ensure you receive every cent owed by tracking,
                collecting, monitoring and optimising your royalty
                streams across all platforms, territories and collection
                societies worldwide. Our team works tirelessly to make
                sure your music generates the income it deserves.
            </p>
        </div>

        <!-- RIGHT -->
        <div class="service-menu">

            <h3>Our Services</h3>

            <div class="service-item active" onclick="showService(0)">
                Maximising Royalties
            </div>

            <div class="service-item" onclick="showService(1)">
                Rights Management
            </div>

            <div class="service-item" onclick="showService(2)">
                Licensing & Sync
            </div>

            <div class="service-item" onclick="showService(3)">
                Transparent Reporting
            </div>

            <div class="service-item" onclick="showService(4)">
                Personalised Support
            </div>

        </div>

    </div>

    <footer class="contact-footer">
        <p>Copyright © 2022 Mokima Publishing. | All Rights Reserved.</p>
    </footer>

</div>

<script>

const services = [
{
    title: "Maximising Royalties",
    text: "We ensure you receive every cent owed by tracking, collecting, monitoring and optimising your royalty streams across all platforms, territories and collection societies worldwide."
},
{
    title: "Rights Management",
    text: "We manage your publishing rights and intellectual property, ensuring your works are properly registered, protected and administered globally."
},
{
    title: "Licensing & Sync",
    text: "We actively seek placement opportunities for your music in film, television, advertising, gaming and digital media to create additional revenue streams."
},
{
    title: "Transparent Reporting",
    text: "Our reporting process provides clear and accurate royalty statements, allowing you to track earnings and understand how your music is performing."
},
{
    title: "Personalised Support",
    text: "Every songwriter and composer receives tailored support, strategic guidance and dedicated account management to help grow their career."
}
];

function showService(index){

    const detail = document.getElementById("serviceDetails");

    detail.classList.remove("fade-in");

    void detail.offsetWidth;

    detail.innerHTML = `
        <h3>${services[index].title}</h3>
        <p>${services[index].text}</p>
    `;

    detail.classList.add("fade-in");

    document.querySelectorAll(".service-item").forEach((el,i)=>{
        el.classList.toggle("active", i === index);
    });
}

</script>

</body>
</html>