# Deploying Technopaedia Website to GoDaddy (quick guide)

1. Zip the `technopaedia_full_site` folder or upload files individually.
2. Log in to your GoDaddy account, go to **My Products → Web Hosting → Manage → cPanel Admin**.
3. In cPanel open **File Manager** and navigate to `public_html`.
4. Upload files and folders (keep the same structure). If you uploaded a zip, use "Extract" in File Manager.
5. If you want the site at your root domain (example.com), place files directly in `public_html`.
6. For the contact form (contact-form-handler.php) make sure PHP is enabled on your GoDaddy hosting plan. GoDaddy's typical PHP hosting supports this.
7. Test the contact form and check email settings. If emails from PHP `mail()` don’t arrive reliably, consider a form service (Formspree, Getform) or configure SMTP using a small PHP library.

That's it — your site should now be live at your domain.
