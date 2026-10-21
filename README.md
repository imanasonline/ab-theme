# ab-theme — Custom WordPress Theme + Plugin

Abdul Basit–style website ki apni custom build: **Custom Theme (PHP) + ek Custom Plugin**, koi third-party plugin nahi. Design: wohi navy + blue→green scheme, refined version. Plan: `abdulbasit-website-rebuild-plan-2026-10-20.md` (Muse ke paas).

## Structure

- Repo ke **root** par hi AB Custom Theme ki files hain (style.css, functions.php, templates) — ye Git Updater ki shart hai: style.css root par, aur site par theme ke folder ka naam repo ke naam (`ab-theme`) jaisa hona chahiye
- Custom plugin (form + chatbot + SEO modules) **alag repo** mein bane ga — *Phase 5 mein*

## Local setup (LocalWP)

1. LocalWP mein site `wp-rebuild` bani hui hai (wp-rebuild.local)
2. Theme install: WP Admin → Appearance → Themes → Add New → Upload Theme (repo ki ZIP se), ya Git Updater ke zariye
3. WP Admin → Appearance → Themes → **AB Custom Theme** → Activate

## Update flow

Code yahan (GitHub) se jata hai. Site par updates **Git Updater** plugin se atay hain (Dashboard → Updates, one-click) — theme ki style.css mein `GitHub Theme URI` header aur har push par Version ka izafa is ke liye zaroori hai.
