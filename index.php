<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop - Boutique en ligne de fleurs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Styles CSS */
        :root {
            --primary-color: #ff85a2;
            --secondary-color: #7dce82;
            --accent-color: #ffd670;
            --text-dark: #333333;
            --text-light: #777777;
            --white: #ffffff;
            --light-bg: #f8f9fa;
            --border-radius: 8px;
            --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--white);
            color: var(--text-dark);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
            top: 0;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            height: 50px;
            margin-right: 10px;
        }

        .logo h1 {
            color: var(--primary-color);
            font-size: 24px;
            font-weight: 700;
        }

        .logo h1 span {
            color: var(--secondary-color);
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 30px;
        }

        nav ul li a {
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            position: relative;
        }

        nav ul li a:hover {
            color: var(--primary-color);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            left: 0;
            bottom: -5px;
            transition: var(--transition);
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        .nav-icons {
            display: flex;
            align-items: center;
        }

        .nav-icons a {
            margin-left: 20px;
            color: var(--text-dark);
            font-size: 20px;
            transition: var(--transition);
        }

        .nav-icons a:hover {
            color: var(--primary-color);
        }

        .mobile-menu {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            background-image: url('https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            align-items: center;
            padding-top: 90px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 600px;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            animation: fadeIn 1s ease;
        }

        .hero-content h2 {
            font-size: 48px;
            margin-bottom: 20px;
            color: var(--text-dark);
        }

        .hero-content p {
            font-size: 18px;
            margin-bottom: 30px;
            color: var(--text-light);
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary-color);
            color: var(--white);
            border-radius: 50px;
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary {
            background-color: transparent;
            color: var(--primary-color);
            border: 2px solid var(--primary-color);
            margin-left: 15px;
        }

        .btn-secondary:hover {
            background-color: var(--primary-color);
            color: var(--white);
        }

        /* Features Section */
        .features {
            padding: 100px 0;
            background-color: var(--light-bg);
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 36px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .section-title p {
            font-size: 18px;
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto;
        }

        .features-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            padding: 30px;
            text-align: center;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .feature-card h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .feature-card p {
            color: var(--text-light);
        }

        /* Products Section */
        .products {
            padding: 100px 0;
        }

        .product-filters {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 8px 20px;
            margin: 5px;
            background-color: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
            border-radius: 30px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
        }

        .filter-btn.active, .filter-btn:hover {
            background-color: var(--primary-color);
            color: var(--white);
        }

        .products-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .product-card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
            transition: var(--transition);
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-img {
            height: 250px;
            overflow: hidden;
            position: relative;
        }

        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .product-card:hover .product-img img {
            transform: scale(1.1);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background-color: var(--accent-color);
            color: var(--text-dark);
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
        }

        .product-info {
            padding: 20px;
        }

        .product-info h3 {
            font-size: 20px;
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .product-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .price {
            font-size: 24px;
            color: var(--primary-color);
            font-weight: 600;
        }

        .old-price {
            font-size: 16px;
            color: var(--text-light);
            text-decoration: line-through;
            margin-left: 10px;
        }

        .product-rating {
            margin-bottom: 15px;
            color: var(--accent-color);
        }

        .product-buttons {
            display: flex;
            justify-content: space-between;
        }

        .product-btn {
            padding: 8px 15px;
            background-color: var(--secondary-color);
            color: var(--white);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
            flex: 1;
            margin: 0 5px;
        }

        .product-btn:hover {
            background-color: var(--primary-color);
        }

        .product-btn i {
            margin-right: 5px;
        }

        /* Offer Section */
        .offer {
            padding: 100px 0;
            background-color: var(--light-bg);
            position: relative;
            overflow: hidden;
        }

        .offer-container {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .offer-img {
            flex: 1;
            min-width: 300px;
        }

        .offer-img img {
            width: 100%;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .offer-content {
            flex: 1;
            padding: 0 40px;
            min-width: 300px;
        }

        .offer-badge {
            display: inline-block;
            background-color: var(--accent-color);
            color: var(--text-dark);
            padding: 8px 15px;
            border-radius: 4px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .offer-content h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .offer-content p {
            font-size: 18px;
            margin-bottom: 30px;
            color: var(--text-light);
        }

        .offer-timer {
            display: flex;
            margin-bottom: 30px;
        }

        .timer-item {
            background-color: var(--white);
            padding: 20px;
            margin-right: 15px;
            border-radius: var(--border-radius);
            min-width: 80px;
            text-align: center;
            box-shadow: var(--box-shadow);
        }

        .timer-count {
            font-size: 30px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .timer-label {
            font-size: 14px;
            color: var(--text-light);
            text-transform: uppercase;
        }

        /* Testimonials */
        .testimonials {
            padding: 100px 0;
        }

        .testimonials-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 30px;
            transition: var(--transition);
        }

        .testimonial-card:hover {
            transform: translateY(-10px);
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .testimonial-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 15px;
        }

        .testimonial-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-author h4 {
            font-size: 18px;
            margin-bottom: 5px;
            color: var(--text-dark);
        }

        .testimonial-author p {
            font-size: 14px;
            color: var(--text-light);
        }

        .testimonial-rating {
            color: var(--accent-color);
            margin-bottom: 15px;
        }

        .testimonial-text {
            color: var(--text-light);
            font-style: italic;
        }

        /* Contact Section */
        .contact {
            padding: 100px 0;
            background-color: var(--light-bg);
        }

        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .contact-info {
            background-color: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 30px;
        }

        .contact-info h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .contact-item {
            display: flex;
            margin-bottom: 20px;
        }

        .contact-icon {
            font-size: 24px;
            color: var(--primary-color);
            margin-right: 15px;
        }

        .contact-text h4 {
            font-size: 18px;
            margin-bottom: 5px;
            color: var(--text-dark);
        }

        .contact-text p {
            color: var(--text-light);
        }

        .contact-form {
            background-color: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            padding: 30px;
        }

        .contact-form h3 {
            font-size: 24px;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #e0e0e0;
            border-radius: var(--border-radius);
            font-size: 16px;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--primary-color);
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 133, 162, 0.2);
        }

        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        /* Newsletter */
        .newsletter {
            padding: 80px 0;
            background-color: var(--primary-color);
        }

        .newsletter-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .newsletter-content {
            max-width: 500px;
            margin-right: 30px;
            margin-bottom: 20px;
        }

        .newsletter-content h3 {
            font-size: 28px;
            margin-bottom: 15px;
            color: var(--white);
        }

        .newsletter-content p {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 0;
        }

        .newsletter-form {
            display: flex;
            flex-wrap: wrap;
        }

        .newsletter-input {
            padding: 15px 20px;
            min-width: 300px;
            border: none;
            border-radius: 50px;
            margin-right: 10px;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .newsletter-input:focus {
            outline: none;
        }

        .btn-newsletter {
            padding: 15px 30px;
            background-color: var(--accent-color);
            color: var(--text-dark);
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-newsletter:hover {
            background-color: var(--secondary-color);
            color: var(--white);
        }

        /* Footer */
        footer {
            background-color: #222;
            color: rgba(255, 255, 255, 0.7);
            padding-top: 60px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            padding-bottom: 40px;
        }

        .footer-col h4 {
            color: var(--white);
            margin-bottom: 25px;
            font-size: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col h4::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary-color);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 15px;
        }

        .footer-links li a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links li a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }

        .footer-social {
            margin-top: 20px;
        }

        .footer-social a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            color: var(--white);
            border-radius: 50%;
            margin-right: 10px;
            transition: var(--transition);
        }

        .footer-social a:hover {
            background-color: var(--primary-color);
            transform: translateY(-5px);
        }

        .footer-bottom {
            background-color: #1a1a1a;
            padding: 20px 0;
            text-align: center;
        }

        .footer-bottom p {
            margin-bottom: 0;
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 999;
        }

        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 991px) {
            .header-container {
                padding: 15px 0;
            }
            
            nav ul {
                position: fixed;
                top: 90px;
                left: -100%;
                width: 70%;
                height: calc(100vh - 90px);
                background-color: var(--white);
                flex-direction: column;
                padding: 40px;
                box-shadow: 5px 0 10px rgba(0, 0, 0, 0.1);
                transition: var(--transition);
                z-index: 1000;
            }
            
            nav ul.active {
                left: 0;
            }
            
            nav ul li {
                margin: 0 0 20px 0;
            }
            
            .mobile-menu {
                display: block;
            }
            
            .hero-content {
                max-width: 100%;
            }
            
            .offer-content, .offer-img {
                flex: 100%;
            }
            
            .offer-content {
                padding: 40px 0;
                order: 2;
            }
            
            .offer-img {
                order: 1;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 768px) {
            .hero-content h2 {
                font-size: 36px;
            }
            
            .section-title h2 {
                font-size: 30px;
            }
            
            .offer-content h2 {
                font-size: 28px;
            }
            
            .newsletter-input {
                width: 100%;
                margin-bottom: 15px;
                margin-right: 0;
            }
            
            .btn-newsletter {
                width: 100%;
            }
        }

        @media (max-width: 576px) {
            .logo h1 {
                font-size: 20px;
            }
            
            .logo img {
                height: 40px;
            }
            
            .hero-content h2 {
                font-size: 28px;
            }
            
            .timer-item {
                padding: 15px;
                min-width: 60px;
                margin-right: 10px;
            }
            
            .timer-count {
                font-size: 24px;
            }
            
            .timer-label {
                font-size: 12px;
            }
        }

        /* Cart Styles */
        .cart-container {
            position: fixed;
            top: 0;
            right: -400px;
            width: 400px;
            height: 100vh;
            background-color: var(--white);
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            z-index: 1001;
            transition: var(--transition);
            padding: 20px;
            overflow-y: auto;
        }

        .cart-container.active {
            right: 0;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
            margin-bottom: 20px;
        }

        .cart-header h3 {
            font-size: 24px;
            color: var(--text-dark);
        }

        .close-cart {
            font-size: 24px;
            color: var(--text-dark);
            cursor: pointer;
            transition: var(--transition);
        }

        .close-cart:hover {
            color: var(--primary-color);
        }

        .cart-items {
            margin-bottom: 30px;
        }

        .cart-item {
            display: flex;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }

        .cart-item-img {
            width: 80px;
            height: 80px;
            overflow: hidden;
            border-radius: var(--border-radius);
            margin-right: 15px;
        }

        .cart-item-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-title {
            font-size: 16px;
            margin-bottom: 5px;
            color: var(--text-dark);
        }

        .cart-item-price {
            font-size: 18px;
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 10px;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
        }

        .quantity-btn {
            width: 30px;
            height: 30px;
            background-color: var(--light-bg);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .quantity-input {
            width: 40px;
            height: 30px;
            border: 1px solid #e0e0e0;
            text-align: center;
            margin: 0 5px;
            font-size: 16px;
        }

        .cart-item-remove {
            color: var(--text-light);
            cursor: pointer;
            font-size: 14px;
            transition: var(--transition);
            margin-left: 10px;
        }

        .cart-item-remove:hover {
            color: var(--primary-color);
        }

        .cart-total {
            padding: 20px 0;
            border-top: 2px solid #e0e0e0;
            border-bottom: 2px solid #e0e0e0;
            margin-bottom: 20px;
        }

        .cart-total-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .cart-total-label {
            font-size: 16px;
            color: var(--text-light);
        }

        .cart-total-value {
            font-size: 16px;
            color: var(--text-dark);
            font-weight: 600;
        }

        .cart-total-item.final {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e0e0e0;
        }

        .cart-total-item.final .cart-total-label,
        .cart-total-item.final .cart-total-value {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary-color);
        }

        .cart-buttons {
            display: flex;
            flex-direction: column;
        }

        .btn-checkout {
            width: 100%;
            padding: 15px;
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: var(--border-radius);
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-bottom: 15px;
        }

        .btn-checkout:hover {
            background-color: var(--secondary-color);
        }

        .btn-continue {
            width: 100%;
            padding: 15px;
            background-color: transparent;
            color: var(--text-dark);
            border: 2px solid var(--text-dark);
            border-radius: var(--border-radius);
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .btn-continue:hover {
            background-color: var(--text-dark);
            color: var(--white);
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            display: none;
        }

        .overlay.active {
            display: block;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background-color: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background-color: var(--text-light);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: var(--primary-color);
        }

                /* Quick View Modal */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1002;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
        }

        .modal.active {
            opacity: 1;
            visibility: visible;
        }

        .modal-content {
            background-color: var(--white);
            border-radius: var(--border-radius);
            width: 90%;
            max-width: 900px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            animation: modalOpen 0.5s ease;
        }

        .modal-close {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 24px;
            color: var(--text-dark);
            cursor: pointer;
            z-index: 1;
            transition: var(--transition);
        }

        .modal-close:hover {
            color: var(--primary-color);
        }

        .product-details {
            display: flex;
            flex-wrap: wrap;
        }

        .product-details-img {
            flex: 1;
            min-width: 300px;
            padding: 20px;
        }

        .product-details-img img {
            width: 100%;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
        }

        .product-details-info {
            flex: 1;
            min-width: 300px;
            padding: 30px;
        }

        .product-details-badge {
            display: inline-block;
            background-color: var(--accent-color);
            color: var(--text-dark);
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .product-details-title {
            font-size: 28px;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .product-details-price {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .product-details-current-price {
            font-size: 28px;
            color: var(--primary-color);
            font-weight: 700;
            margin-right: 15px;
        }

        .product-details-old-price {
            font-size: 20px;
            color: var(--text-light);
            text-decoration: line-through;
        }

        .product-details-rating {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .product-details-stars {
            color: var(--accent-color);
            font-size: 18px;
            margin-right: 10px;
        }

        .product-details-reviews {
            color: var(--text-light);
            font-size: 14px;
            cursor: pointer;
            transition: var(--transition);
        }

        .product-details-reviews:hover {
            color: var(--primary-color);
        }

        .product-details-description {
            margin-bottom: 30px;
            color: var(--text-light);
            line-height: 1.8;
        }

        .product-details-meta {
            margin-bottom: 30px;
        }

        .product-meta-item {
            display: flex;
            margin-bottom: 10px;
        }

        .product-meta-label {
            font-weight: 600;
            margin-right: 10px;
            color: var(--text-dark);
        }

        .product-meta-value {
            color: var(--text-light);
        }

        .product-details-quantity {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .product-details-quantity-label {
            margin-right: 15px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .product-details-quantity-input {
            display: flex;
            align-items: center;
        }

        .product-details-buttons {
            display: flex;
            flex-wrap: wrap;
        }

        .btn-add-to-cart {
            flex: 1;
            padding: 12px 20px;
            background-color: var(--primary-color);
            color: var(--white);
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-right: 10px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-add-to-cart i {
            margin-right: 10px;
        }

        .btn-add-to-cart:hover {
            background-color: var(--secondary-color);
        }

        .btn-wishlist {
            padding: 12px;
            background-color: var(--light-bg);
            color: var(--text-dark);
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-wishlist:hover {
            background-color: var(--text-dark);
            color: var(--white);
        }

        @keyframes modalOpen {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .product-details-info, 
            .product-details-img {
                flex: 100%;
                padding: 15px;
            }
            
            .product-details-title {
                font-size: 24px;
            }
            
            .product-details-current-price {
                font-size: 24px;
            }
        }
    </style>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-container">
                <div class="logo">
                    <img src="https://cdn-icons-png.flaticon.com/512/2966/2966327.png" alt="Flower Shop Logo">
                    <h1>Flower <span>Shop</span></h1>
                </div>
                <nav>
                    <ul id="menu">
                        <li><a href="#home">Accueil</a></li>
                        <li><a href="#products">Produits</a></li>
                        <li><a href="#offer">Offres</a></li>
                        <li><a href="#testimonials">Avis</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <div class="nav-icons">
                    <a href="#"><i class="fas fa-search"></i></a>
                    <a href="#"><i class="fas fa-user"></i></a>
                    <a href="#" id="cart-icon"><i class="fas fa-shopping-cart"></i></a>
                </div>
                <div class="mobile-menu" id="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h2>Des fleurs fraîches pour chaque occasion</h2>
                <p>Découvrez notre sélection de fleurs fraîches et de compositions florales pour tous vos événements spéciaux ou simplement pour le plaisir d'offrir.</p>
                <a href="#products" class="btn">Nos produits</a>
                <a href="#contact" class="btn btn-secondary">Nous contacter</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <div class="section-title">
                <h2>Pourquoi nous choisir</h2>
                <p>Nous sommes fiers de vous offrir une expérience florale exceptionnelle avec des produits de qualité et un service hors pair.</p>
            </div>
            <div class="features-container">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Livraison rapide</h3>
                    <p>Livraison le jour même pour toutes commandes passées avant 14h.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Fleurs fraîches</h3>
                    <p>Nos fleurs sont sélectionnées chaque matin pour garantir leur fraîcheur.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <h3>Emballage soigné</h3>
                    <p>Chaque bouquet est préparé et emballé avec soin par nos fleuristes experts.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products" id="products">
        <div class="container">
            <div class="section-title">
                <h2>Nos produits</h2>
                <p>Découvrez notre large gamme de bouquets et compositions florales pour tous les goûts et toutes les occasions.</p>
            </div>
            <div class="product-filters">
                <button class="filter-btn active" data-filter="all">Tous</button>
                <button class="filter-btn" data-filter="bouquets">Bouquets</button>
                <button class="filter-btn" data-filter="roses">Roses</button>
                <button class="filter-btn" data-filter="plantes">Plantes</button>
                <button class="filter-btn" data-filter="occasions">Occasions</button>
            </div>
            <div class="products-container">
                <div class="product-card" data-category="bouquets">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1591886960571-74d43a9d4166?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Bouquet de printemps">
                        <div class="product-badge">Nouveau</div>
                    </div>
                    <div class="product-info">
                        <h3>Bouquet de Printemps</h3>
                        <div class="product-price">
                            <span class="price">39,90 €</span>
                            <span class="old-price">45,00 €</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="product-buttons">
                            <button class="product-btn btn-add-cart"><i class="fas fa-shopping-cart"></i> Ajouter</button>
                            <button class="product-btn btn-quick-view"><i class="fas fa-eye"></i> Voir</button>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="roses">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1582794543139-8ac9cb0f7b11?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Roses rouges">
                        <div class="product-badge">Populaire</div>
                    </div>
                    <div class="product-info">
                        <h3>Bouquet de Roses Rouges</h3>
                        <div class="product-price">
                            <span class="price">49,90 €</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="product-buttons">
                            <button class="product-btn btn-add-cart"><i class="fas fa-shopping-cart"></i> Ajouter</button>
                            <button class="product-btn btn-quick-view"><i class="fas fa-eye"></i> Voir</button>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="plantes">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1599309329365-0a9ed45a1da3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Plante d'intérieur">
                    </div>
                    <div class="product-info">
                        <h3>Plante Monstera</h3>
                        <div class="product-price">
                            <span class="price">29,90 €</span>
                            <span class="old-price">34,90 €</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-buttons">
                            <button class="product-btn btn-add-cart"><i class="fas fa-shopping-cart"></i> Ajouter</button>
                            <button class="product-btn btn-quick-view"><i class="fas fa-eye"></i> Voir</button>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="occasions">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1602766228668-b25b1ede4842?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Bouquet anniversaire">
                        <div class="product-badge">-15%</div>
                    </div>
                    <div class="product-info">
                        <h3>Bouquet Anniversaire</h3>
                        <div class="product-price">
                            <span class="price">42,50 €</span>
                            <span class="old-price">50,00 €</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="product-buttons">
                            <button class="product-btn btn-add-cart"><i class="fas fa-shopping-cart"></i> Ajouter</button>
                            <button class="product-btn btn-quick-view"><i class="fas fa-eye"></i> Voir</button>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="bouquets">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1561181286-d3fee7d55364?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Bouquet mixte">
                    </div>
                    <div class="product-info">
                        <h3>Bouquet Champêtre</h3>
                        <div class="product-price">
                            <span class="price">35,90 €</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-buttons">
                            <button class="product-btn btn-add-cart"><i class="fas fa-shopping-cart"></i> Ajouter</button>
                            <button class="product-btn btn-quick-view"><i class="fas fa-eye"></i> Voir</button>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="roses">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1551731409-43eb3e517a1a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Roses blanches">
                    </div>
                    <div class="product-info">
                        <h3>Bouquet de Roses Blanches</h3>
                        <div class="product-price">
                            <span class="price">45,90 €</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="product-buttons">
                            <button class="product-btn btn-add-cart"><i class="fas fa-shopping-cart"></i> Ajouter</button>
                            <button class="product-btn btn-quick-view"><i class="fas fa-eye"></i> Voir</button>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="plantes">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1509423350716-97f9360b4e09?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Cactus">
                        <div class="product-badge">Nouveau</div>
                    </div>
                    <div class="product-info">
                        <h3>Mini Cactus Collection</h3>
                        <div class="product-price">
                            <span class="price">24,90 €</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-buttons">
                            <button class="product-btn btn-add-cart"><i class="fas fa-shopping-cart"></i> Ajouter</button>
                            <button class="product-btn btn-quick-view"><i class="fas fa-eye"></i> Voir</button>
                        </div>
                    </div>
                </div>
                <div class="product-card" data-category="occasions">
                    <div class="product-img">
                        <img src="https://images.unsplash.com/photo-1562690868-60bbe7293e94?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Bouquet mariage">
                    </div>
                    <div class="product-info">
                        <h3>Bouquet Mariage</h3>
                        <div class="product-price">
                            <span class="price">75,00 €</span>
                        </div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="product-buttons">
                            <button class="product-btn btn-add-cart"><i class="fas fa-shopping-cart"></i> Ajouter</button>
                            <button class="product-btn btn-quick-view"><i class="fas fa-eye"></i> Voir</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offer Section -->
    <section class="offer" id="offer">
        <div class="container">
            <div class="offer-container">
                <div class="offer-img">
                    <img src="https://images.unsplash.com/photo-1454262041357-5d96f50a2f27?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Offre spéciale">
                </div>
                <div class="offer-content">
                    <span class="offer-badge">Offre limitée</span>
                    <h2>-20% sur tous les bouquets de roses</h2>
                    <p>Profitez de notre offre spéciale sur tous les bouquets de roses. Cette offre est valable pour une durée limitée, ne la manquez pas!</p>
                    <div class="offer-timer">
                        <div class="timer-item">
                            <div class="timer-count" id="days">00</div>
                            <div class="timer-label">Jours</div>
                        </div>
                        <div class="timer-item">
                            <div class="timer-count" id="hours">00</div>
                            <div class="timer-label">Heures</div>
                        </div>
                        <div class="timer-item">
                            <div class="timer-count" id="minutes">00</div>
                            <div class="timer-label">Minutes</div>
                        </div>
                        <div class="timer-item">
                            <div class="timer-count" id="seconds">00</div>
                            <div class="timer-label">Secondes</div>
                        </div>
                    </div>
                    <a href="#products" class="btn">En profiter maintenant</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="section-title">
                <h2>Avis clients</h2>
                <p>Découvrez ce que nos clients disent de nos produits et services. Votre satisfaction est notre priorité!</p>
            </div>
            <div class="testimonials-container">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-img">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Client">
                        </div>
                        <div class="testimonial-author">
                            <h4>Sophie Martin</h4>
                            <p>Cliente régulière</p>
                        </div>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-text">
                        <p>"Je commande régulièrement des fleurs chez Flower Shop et je suis toujours ravie de la qualité des bouquets. La livraison est rapide et les fleurs restent fraîches longtemps. Je recommande vivement!"</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-img">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Client">
                        </div>
                        <div class="testimonial-author">
                            <h4>Thomas Dubois</h4>
                            <p>Client</p>
                        </div>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="testimonial-text">
                        <p>"J'ai commandé un bouquet pour l'anniversaire de ma mère et elle a été enchantée! Le service client est également très réactif et à l'écoute. Une très bonne expérience."</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-img">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Client">
                        </div>
                        <div class="testimonial-author">
                            <h4>Émilie Bernard</h4>
                            <p>Cliente</p>
                        </div>
                    </div>
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-text">
                        <p>"La qualité des fleurs est exceptionnelle et l'emballage est toujours soigné. J'apprécie particulièrement la possibilité de personnaliser les bouquets selon mes préférences. Service 5 étoiles!"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contactez-nous</h2>
                <p>Des questions ou des demandes spéciales? N'hésitez pas à nous contacter, notre équipe est à votre disposition.</p>
            </div>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Informations de contact</h3>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Adresse</h4>
                            <p>123 Rue des Fleurs, 75001 Paris, France</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Téléphone</h4>
                            <p>+33 1 23 45 67 89</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p>contact@flowershop.fr</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Heures d'ouverture</h4>
                            <p>Lun-Sam: 9h - 19h / Dim: 10h - 16h</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <h3>Envoyez-nous un message</h3>
                    <form id="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Votre email" required>
                        </div>
                                                <div class="form-group">
                            <input type="text" class="form-control" placeholder="Sujet">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Votre message" required></textarea>
                        </div>
                        <button type="submit" class="btn">Envoyer le message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-container">
                <div class="newsletter-content">
                    <h3>Abonnez-vous à notre newsletter</h3>
                    <p>Recevez nos dernières offres, nouveautés et conseils floraux directement dans votre boîte mail.</p>
                </div>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Votre adresse email" required>
                    <button type="submit" class="btn-newsletter">S'abonner</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h4>Flower Shop</h4>
                    <p>Votre boutique de fleurs en ligne depuis 2010. Nous proposons des fleurs fraîches, des plantes et des compositions florales pour toutes les occasions.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Liens rapides</h4>
                    <ul class="footer-links">
                        <li><a href="#home">Accueil</a></li>
                        <li><a href="#products">Produits</a></li>
                        <li><a href="#offer">Offres spéciales</a></li>
                        <li><a href="#testimonials">Témoignages</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Catégories</h4>
                    <ul class="footer-links">
                        <li><a href="#">Bouquets</a></li>
                        <li><a href="#">Roses</a></li>
                        <li><a href="#">Plantes d'intérieur</a></li>
                        <li><a href="#">Plantes d'extérieur</a></li>
                        <li><a href="#">Accessoires</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Aide & Information</h4>
                    <ul class="footer-links">
                        <li><a href="#">Mon compte</a></li>
                        <li><a href="#">Livraison</a></li>
                        <li><a href="#">Retours & remboursements</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Mentions légales</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p>&copy; 2025 Flower Shop. Tous droits réservés. Conçu avec <i class="fas fa-heart"></i> à Paris</p>
            </div>
        </div>
    </footer>

    <!-- Back to top button -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-chevron-up"></i>
    </div>

    <!-- Cart -->
    <div class="cart-container" id="cart">
        <div class="cart-header">
            <h3>Votre panier</h3>
            <div class="close-cart" id="closeCart">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="cart-items">
            <!-- Cart items will be added here dynamically -->
        </div>
        <div class="cart-total">
            <div class="cart-total-item">
                <span class="cart-total-label">Sous-total:</span>
                <span class="cart-total-value">0,00 €</span>
            </div>
            <div class="cart-total-item">
                <span class="cart-total-label">Livraison:</span>
                <span class="cart-total-value">0,00 €</span>
            </div>
            <div class="cart-total-item final">
                <span class="cart-total-label">Total:</span>
                <span class="cart-total-value total-price">0,00 €</span>
            </div>
        </div>
        <div class="cart-buttons">
            <button class="btn-checkout">Passer à la caisse</button>
            <button class="btn-continue" id="continueShopping">Continuer les achats</button>
        </div>
    </div>
    <div class="overlay" id="overlay"></div>

    <!-- Quick View Modal -->
    <div class="modal" id="quickViewModal">
        <div class="modal-content">
            <div class="modal-close" id="closeModal">
                <i class="fas fa-times"></i>
            </div>
            <div class="product-details">
                <div class="product-details-img">
                    <img src="https://images.unsplash.com/photo-1591886960571-74d43a9d4166?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Product">
                </div>
                <div class="product-details-info">
                    <span class="product-details-badge">Nouveau</span>
                    <h2 class="product-details-title">Bouquet de Printemps</h2>
                    <div class="product-details-price">
                        <span class="product-details-current-price">39,90 €</span>
                        <span class="product-details-old-price">45,00 €</span>
                    </div>
                    <div class="product-details-rating">
                        <div class="product-details-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="product-details-reviews">12 avis</span>
                    </div>
                    <div class="product-details-description">
                        <p>Un magnifique bouquet de fleurs printanières, composé de tulipes, jonquilles, et autres fleurs de saison. Parfait pour égayer votre intérieur ou pour offrir à un être cher.</p>
                    </div>
                    <div class="product-details-meta">
                        <div class="product-meta-item">
                            <span class="product-meta-label">Disponibilité:</span>
                            <span class="product-meta-value">En stock</span>
                        </div>
                        <div class="product-meta-item">
                            <span class="product-meta-label">Catégorie:</span>
                            <span class="product-meta-value">Bouquets</span>
                        </div>
                        <div class="product-meta-item">
                            <span class="product-meta-label">Code produit:</span>
                            <span class="product-meta-value">BP001</span>
                        </div>
                    </div>
                    <div class="product-details-quantity">
                        <span class="product-details-quantity-label">Quantité:</span>
                        <div class="product-details-quantity-input">
                            <button class="quantity-btn minus">-</button>
                            <input type="text" class="quantity-input" value="1" readonly>
                            <button class="quantity-btn plus">+</button>
                        </div>
                    </div>
                    <div class="product-details-buttons">
                        <button class="btn-add-to-cart"><i class="fas fa-shopping-cart"></i> Ajouter au panier</button>
                        <button class="btn-wishlist"><i class="far fa-heart"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // DOM Elements
const mobileMenu = document.getElementById('mobile-menu');
const menu = document.getElementById('menu');
const cartIcon = document.getElementById('cart-icon');
const cart = document.getElementById('cart');
const closeCart = document.getElementById('closeCart');
const continueShopping = document.getElementById('continueShopping');
const overlay = document.getElementById('overlay');
const backToTop = document.getElementById('backToTop');
const quickViewBtns = document.querySelectorAll('.btn-quick-view');
const quickViewModal = document.getElementById('quickViewModal');
const closeModal = document.getElementById('closeModal');
const addToCartBtns = document.querySelectorAll('.btn-add-cart');
const filterBtns = document.querySelectorAll('.filter-btn');
const productCards = document.querySelectorAll('.product-card');

// Mobile Menu Toggle
mobileMenu.addEventListener('click', () => {
    menu.classList.toggle('active');
    mobileMenu.classList.toggle('active');
    if(mobileMenu.classList.contains('active')) {
        mobileMenu.innerHTML = '<i class="fas fa-times"></i>';
    } else {
        mobileMenu.innerHTML = '<i class="fas fa-bars"></i>';
    }
});

// Cart Toggle
cartIcon.addEventListener('click', (e) => {
    e.preventDefault();
    cart.classList.add('active');
    overlay.classList.add('active');
    document.body.style.overflow = 'hidden';
});

closeCart.addEventListener('click', () => {
    cart.classList.remove('active');
    overlay.classList.remove('active');
    document.body.style.overflow = '';
});

continueShopping.addEventListener('click', () => {
    cart.classList.remove('active');
    overlay.classList.remove('active');
    document.body.style.overflow = '';
});

overlay.addEventListener('click', () => {
    cart.classList.remove('active');
    quickViewModal.classList.remove('active');
    overlay.classList.remove('active');
    document.body.style.overflow = '';
});

// Back to Top Button
window.addEventListener('scroll', () => {
    if(window.scrollY > 300) {
        backToTop.classList.add('active');
    } else {
        backToTop.classList.remove('active');
    }
});

backToTop.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Quick View Modal
quickViewBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // In a real application, you would fetch the product details here
        // and update the modal content dynamically
        
        quickViewModal.classList.add('active');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    });
});

closeModal.addEventListener('click', () => {
    quickViewModal.classList.remove('active');
    overlay.classList.remove('active');
    document.body.style.overflow = '';
});

// Product Filtering
filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        // Remove active class from all buttons
        filterBtns.forEach(btn => {
            btn.classList.remove('active');
        });
        
        // Add active class to clicked button
        btn.classList.add('active');
        
        // Get filter value
        const filter = btn.getAttribute('data-filter');
        
        // Filter products
        productCards.forEach(card => {
            if(filter === 'all') {
                card.style.display = 'block';
            } else {
                if(card.getAttribute('data-category') === filter) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            }
        });
    });
});

// Add to Cart Functionality
addToCartBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        const productCard = btn.closest('.product-card');
        const productImg = productCard.querySelector('.product-img img').src;
        const productTitle = productCard.querySelector('h3').textContent;
        const productPrice = productCard.querySelector('.price').textContent;
        
        // Create cart item
        const cartItem = document.createElement('div');
        cartItem.classList.add('cart-item');
        
        cartItem.innerHTML = `
            <div class="cart-item-img">
                <img src="${productImg}" alt="${productTitle}">
            </div>
            <div class="cart-item-details">
                <h3 class="cart-item-title">${productTitle}</h3>
                <div class="cart-item-price">${productPrice}</div>
                <div class="cart-item-quantity">
                    <button class="quantity-btn minus">-</button>
                    <input type="text" class="quantity-input" value="1" readonly>
                    <button class="quantity-btn plus">+</button>
                    <span class="cart-item-remove"><i class="fas fa-trash"></i></span>
                </div>
            </div>
        `;
        
        // Add item to cart
        document.querySelector('.cart-items').appendChild(cartItem);
        
        // Update cart totals
        updateCartTotal();
        
        // Open cart
        cart.classList.add('active');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
        
        // Add event listeners to new cart item
        const quantityBtns = cartItem.querySelectorAll('.quantity-btn');
        const removeBtn = cartItem.querySelector('.cart-item-remove');
        
        quantityBtns.forEach(qBtn => {
            qBtn.addEventListener('click', () => {
                const input = qBtn.parentElement.querySelector('.quantity-input');
                let value = parseInt(input.value);
                
                if(qBtn.classList.contains('plus')) {
                    value++;
                } else {
                    value = value > 1 ? value - 1 : 1;
                }
                
                input.value = value;
                updateCartTotal();
            });
        });
        
        removeBtn.addEventListener('click', () => {
            cartItem.remove();
            updateCartTotal();
        });
    });
});

// Update Cart Total
function updateCartTotal() {
    const cartItems = document.querySelectorAll('.cart-item');
    let subtotal = 0;
    
    cartItems.forEach(item => {
        const priceText = item.querySelector('.cart-item-price').textContent;
        const price = parseFloat(priceText.replace('€', '').replace(',', '.').trim());
        const quantity = parseInt(item.querySelector('.quantity-input').value);
        
        subtotal += price * quantity;
    });
    
    // Shipping is free over 50€, otherwise 4.90€
    const shipping = subtotal > 50 ? 0 : 4.90;
    const total = subtotal + shipping;
    
    // Update cart totals
    document.querySelector('.cart-total-item:nth-child(1) .cart-total-value').textContent = subtotal.toFixed(2).replace('.', ',') + ' €';
    document.querySelector('.cart-total-item:nth-child(2) .cart-total-value').textContent = shipping.toFixed(2).replace('.', ',') + ' €';
    document.querySelector('.total-price').textContent = total.toFixed(2).replace('.', ',') + ' €';
}

// Quantity buttons in Quick View
const quantityBtnsQuickView = document.querySelectorAll('.product-details-quantity-input .quantity-btn');
const quantityInputQuickView = document.querySelector('.product-details-quantity-input .quantity-input');

quantityBtnsQuickView.forEach(btn => {
    btn.addEventListener('click', () => {
        let value = parseInt(quantityInputQuickView.value);
        
        if(btn.classList.contains('plus')) {
            value++;
        } else {
            value = value > 1 ? value - 1 : 1;
        }
        
        quantityInputQuickView.value = value;
    });
});

// Add to cart from Quick View
const addToCartQuickView = document.querySelector('.btn-add-to-cart');
addToCartQuickView.addEventListener('click', () => {
    const productImg = document.querySelector('.product-details-img img').src;
    const productTitle = document.querySelector('.product-details-title').textContent;
    const productPrice = document.querySelector('.product-details-current-price').textContent;
    const quantity = parseInt(quantityInputQuickView.value);
    
    // Create cart item
    const cartItem = document.createElement('div');
    cartItem.classList.add('cart-item');
    
    cartItem.innerHTML = `
        <div class="cart-item-img">
            <img src="${productImg}" alt="${productTitle}">
        </div>
        <div class="cart-item-details">
            <h3 class="cart-item-title">${productTitle}</h3>
            <div class="cart-item-price">${productPrice}</div>
            <div class="cart-item-quantity">
                <button class="quantity-btn minus">-</button>
                <input type="text" class="quantity-input" value="${quantity}" readonly>
                <button class="quantity-btn plus">+</button>
                <span class="cart-item-remove"><i class="fas fa-trash"></i></span>
            </div>
        </div>
    `;
    
    // Add item to cart
    document.querySelector('.cart-items').appendChild(cartItem);
    
    // Update cart totals
    updateCartTotal();
    
    // Close modal and open cart
    quickViewModal.classList.remove('active');
    cart.classList.add('active');
    
    // Add event listeners to new cart item
    const quantityBtns = cartItem.querySelectorAll('.quantity-btn');
    const removeBtn = cartItem.querySelector('.cart-item-remove');
    
    quantityBtns.forEach(qBtn => {
        qBtn.addEventListener('click', () => {
            const input = qBtn.parentElement.querySelector('.quantity-input');
            let value = parseInt(input.value);
            
            if(qBtn.classList.contains('plus')) {
                value++;
            } else {
                value = value > 1 ? value - 1 : 1;
            }
            
            input.value = value;
            updateCartTotal();
        });
    });
    
    removeBtn.addEventListener('click', () => {
        cartItem.remove();
        updateCartTotal();
    });
});

// Contact Form
const contactForm = document.getElementById('contact-form');
if(contactForm) {
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Votre message a été envoyé avec succès. Nous vous contacterons dans les plus brefs délais.');
        contactForm.reset();
    });
}

// Newsletter Form
const newsletterForm = document.querySelector('.newsletter-form');
if(newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Merci de vous être inscrit à notre newsletter!');
        newsletterForm.reset();
    });
}

// Special Offer Timer
function startTimer() {
    // Set the date we're counting down to (7 days from now)
    const countDownDate = new Date();
    countDownDate.setDate(countDownDate.getDate() + 7);
    
    const daysElement = document.getElementById('days');
    const hoursElement = document.getElementById('hours');
    const minutesElement = document.getElementById('minutes');
    const secondsElement = document.getElementById('seconds');
    
    // Update the count down every 1 second
    const x = setInterval(function() {
        // Get today's date and time
        const now = new Date().getTime();
        
        // Find the distance between now and the count down date
        const distance = countDownDate - now;
        
        // Time calculations for days, hours, minutes and seconds
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        // Display the result
        daysElement.innerHTML = days.toString().padStart(2, '0');
        hoursElement.innerHTML = hours.toString().padStart(2, '0');
        minutesElement.innerHTML = minutes.toString().padStart(2, '0');
        secondsElement.innerHTML = seconds.toString().padStart(2, '0');
        
        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            daysElement.innerHTML = "00";
            hoursElement.innerHTML = "00";
            minutesElement.innerHTML = "00";
            secondsElement.innerHTML = "00";
        }
    }, 1000);
}

// Start the timer when the page loads
startTimer();
    </script>
</body>
</html>


