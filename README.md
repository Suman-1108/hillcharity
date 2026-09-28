# 🌟 Hill Charity (Nesakarangal Charity Trust)

[![GitHub Repository](https://img.shields.io/badge/GitHub-Suman--1108%2Fhillcharity-blue?style=for-the-badge&logo=github)](https://github.com/Suman-1108/hillcharity)
[![Status](https://img.shields.io/badge/Status-Active-brightgreen?style=for-the-badge)](#)
[![License](https://img.shields.io/badge/License-MIT-orange?style=for-the-badge)](#)

> Official website for **Nesakarangal Hill Charity Trust**, an NGO based in Tuticorin, Tamil Nadu dedicated to supporting underprivileged children, destitute elderly citizens, empowering women, providing disaster relief, and serving meals to those in need.

---

## 📌 GitHub Repository Link

- **Repository URL**: [https://github.com/Suman-1108/hillcharity](https://github.com/Suman-1108/hillcharity)
- **Clone URL**: `git clone https://github.com/Suman-1108/hillcharity.git`

---

## ✨ Features

- 💳 **Razorpay Payment Gateway Integration**: Instant, secure online donations with modal checkout support for credit/debit cards, UPI (Google Pay, PhonePe, Paytm), net banking, and wallets.
- 👶 **Child & Orphanage Support**: Dedicated cause pages highlighting children's home initiatives and education support.
- 👴 **Old Age Home & Elder Care**: Programs and facilities for homeless and abandoned elderly citizens in Tuticorin.
- 🍲 **Food & Meal Distribution**: Daily and annual meal distribution campaigns for the hungry.
- 👩 **Women Empowerment & Skill Training**: Initiatives helping women achieve financial independence.
- 🚨 **Disaster Relief & Emergency Response**: Rapid response campaigns for flood, cyclone, and emergency relief.
- 📸 **Rich Media Gallery & Video Showcase**: Event photo galleries and video highlights using lightbox filters.
- 📝 **Volunteer & Event Registration**: Interactive registration forms for community events, fashion shows, and volunteering.

---

## 🛠️ Technology Stack

- **Frontend Core**: HTML5, CSS3, JavaScript (ES6+)
- **Styling Framework**: Bootstrap 3 / Custom CSS design system
- **Plugins & Libraries**:
  - jQuery 1.12.3
  - Razorpay Checkout SDK (`https://checkout.razorpay.com/v1/checkout.js`)
  - Owl Carousel & Slick Slider
  - Nivo Slider
  - Venobox Lightbox
  - WOW.js & Animate.css
- **Backend / Form Processing**: PHP (`event-register.php`)

---

## 📂 Project Directory Structure

```text
hillcharity/
├── index.html                           # Home Page
├── about.html                           # About Us
├── causes.html                          # Charity Causes & Initiatives
├── donate.html                          # Online Donation Page (Razorpay integrated)
├── events.html                          # Upcoming & Past Events
├── gallery.html                         # Photo & Video Gallery
├── contact.html                         # Contact & Location Info
├── volunteer.html                       # Volunteer Signup
├── child.html                           # Children's Home Details
├── aged.html                            # Old Age Home Details
├── women.html                           # Women Empowerment Details
├── disaster.html                        # Disaster Relief Details
├── awareness.html                       # Community Awareness Campaigns
├── feed.html                            # Meal Distribution Campaign
├── corporate.html                       # CSR & Corporate Partnerships
├── individual.html                      # Individual Giving & Sponsorship
├── event-register.php                   # Event Registration Backend Handler
├── css/                                 # Style Sheets
├── js/                                  # JavaScript & Plugin Scripts
│   └── main.js                          # Custom UI & Razorpay Gateway Script
├── lib/                                 # Nivo Slider & External Plugins
├── img/                                 # Images, Banners & Video Assets
├── sitemap.xml                          # SEO Sitemap
└── README.md                            # Project Documentation
```

---

## 💳 Razorpay Payment Integration

The website is configured with **Razorpay Payment Gateway** for seamless online donations.

```javascript
// Example Razorpay Integration Snippet (in js/main.js or donate.html)
var options = {
    "key": "YOUR_RAZORPAY_KEY_ID", // Replace with your live Razorpay Key ID
    "amount": amount * 100, // Amount in paise
    "currency": "INR",
    "name": "Hill Charity Trust",
    "description": "Donation for Charity Cause",
    "handler": function (response) {
        alert("Payment Successful! Payment ID: " + response.razorpay_payment_id);
    },
    "prefill": {
        "name": donorName,
        "email": donorEmail,
        "contact": donorPhone
    },
    "theme": {
        "color": "#fcb813"
    }
};
var rzp = new Razorpay(options);
rzp.open();
```

---

## 🚀 Quick Start / Local Setup

1. **Clone the repository**:
   ```bash
   git clone https://github.com/Suman-1108/hillcharity.git
   ```
2. **Navigate to the project directory**:
   ```bash
   cd hillcharity
   ```
3. **Run locally**:
   Open `index.html` directly in any web browser, or serve using VS Code Live Server or Python HTTP server:
   ```bash
   python -m http.server 8000
   ```
   Visit `http://localhost:8000` in your browser.

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!  
Feel free to check the [issues page](https://github.com/Suman-1108/hillcharity/issues).

---

## 📜 License

This project is open-source and available under the [MIT License](LICENSE).
