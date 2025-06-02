# Bullring Finance Payment Gateway for WooCommerce

**Contributors:** Sylvanus P. Ezekiel  
**Donate link:** [https://iamspezekiel.com.ng/donate](https://iamspezekiel.com.ng/donate)  
**Tags:** payment gateway, woocommerce, bullring, finance  
**Requires at least:** 6.4  
**Tested up to:** 6.5  
**Requires PHP:** 7.4  
**WC requires at least:** 9.5  
**Stable tag:** 1.0.0  
**License:** GPLv2 or later  
**License URI:** [http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

---

Integrate Bullring Finance as a payment gateway for your WooCommerce store using their secure JavaScript payment widget.

---

## 🧾 Description

The **Bullring Finance Payment Gateway for WooCommerce** enables your store to accept payments via Bullring Finance's JavaScript widget. It offers seamless checkout integration, real-time payment updates, and secure transaction handling.

---

## ✨ Features

- Easy setup with minimal configuration
- Secure payments via Bullring Finance widget
- Automatic order status updates (based on product type)
- Transaction ID storage with each order
- Debug log for troubleshooting payment issues
- Clean and simple admin interface
- Supports both digital and physical products

---

## 📋 Requirements

- WordPress 6.4 or higher  
- WooCommerce 9.5 or higher  
- PHP 7.4 or higher  
- A [Bullring Finance merchant account](#)

---

## 📦 Installation

1. Upload the plugin to your WordPress site:
   - Either upload the `bullring-woocommerce` folder to `/wp-content/plugins/`
   - Or install it via the WordPress Plugin screen.
2. Activate it via the **Plugins** screen.
3. Navigate to **WooCommerce > Settings > Payments**.
4. Click on **Bullring Finance** and configure:
   - **Merchant ID**
   - **Merchant Name**
   - Enable debug log if needed.
5. Save changes and start accepting payments.

---

## ⚙️ Configuration Options

| Setting          | Description                                              |
|------------------|----------------------------------------------------------|
| Enable/Disable   | Turn the gateway on or off                               |
| Title            | Checkout label for this payment method                   |
| Description      | Message shown to customers at checkout                   |
| Merchant ID      | Your Bullring Finance Merchant ID                        |
| Merchant Name    | Displayed in the payment widget (defaults to site name)  |
| Debug Log        | Enable event logging for debugging                       |

---

## 🧠 How It Works

1. Customer chooses **Bullring Finance** at checkout.
2. After order is placed, the payment widget loads on the payment page.
3. Customer completes the transaction using Bullring.
4. If payment is **successful**:
   - Transaction ID is saved in order meta.
   - Order status is:
     - `Completed` (if only virtual/digital products)
     - `Processing` (if physical products)
   - Customer is redirected to the thank you page.
5. If payment **fails**:
   - Error message is displayed.
   - Error is logged (if debug mode is on).

---

## 💻 Development

This plugin is open-source and available on GitHub:  
👉 [https://github.com/iamspezekiel/bullring-finance-woocommerce](https://github.com/iamspezekiel/bullring-finance-woocommerce)

### 📁 File Structure
bullring-woocommerce/
├── assets/
│ └── images/
│ └── bullring-logo.png
├── languages/
│ ├── bullring-wc.pot
│ ├── bullring-wc-en_US.po
│ └── bullring-wc-en_US.mo
├── .gitignore
├── README.md
├── bullring-woocommerce.php
├── readme.txt
└── uninstall.php


### 🔌 Hooks & Filters

- `woocommerce_bullring_icon`: Filter to customize the payment method icon

---

## 📖 Frequently Asked Questions

**Q: Do I need a Bullring Finance account?**  
A: Yes, you must have a merchant account with Bullring Finance.

**Q: Does it support subscriptions?**  
A: Not currently. Only one-time payments are supported.

**Q: Can I see the transaction details?**  
A: Yes, the transaction ID is stored with the order and visible in the admin order details.

**Q: How do I troubleshoot issues?**  
A: Enable Debug Mode to log events. Logs can be accessed from the plugin settings.

---

## 📈 Widget Integration

The plugin uses the Bullring Finance widget:  
`https://unpkg.com/@bullring/payment-widget`

### Widget Attributes

| Attribute       | Description                              |
|----------------|------------------------------------------|
| `invoice-amount` | Total order amount                      |
| `merchant-id`   | Your Bullring Finance merchant ID        |
| `merchant-name` | Your brand name as shown in the widget   |

### Events Listened

- `payment-success`: Fired when payment is successful
- `payment-error`: Fired when payment fails
- `close`: Fired when widget is closed

---

## 🛠 Changelog

### 1.0.0
- Initial release of Bullring Finance Payment Gateway for WooCommerce.

---

## 🚨 Upgrade Notice

### 1.0.0
- First stable version. Includes all core payment gateway features.

---

## 📄 License

This plugin is licensed under the GPL v2 or later.  
[http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

---

## 🙏 Credits

Developed by **Sylvanus P. Ezekiel**  
Powered by [Bullring Finance JavaScript Widget](https://unpkg.com/@bullring/payment-widget)

For support, feedback, or contributions:  
[GitHub Issues](https://github.com/iamspezekiel/bullring-finance-woocommerce/issues)

---

**💰 Love this plugin?** [Support the developer](https://iamspezekiel.com.ng/donate)
