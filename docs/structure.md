# Ayn Booking Project Structure

The plugin skeleton follows the V1 architecture for Ayn Booking. This arborescence provides a placeholder for each domain to be implemented.

```
ayn-booking/
├─ ayn-booking.php              # Plugin bootstrap and hook registration entrypoint
├─ uninstall.php                # Cleanup placeholder
├─ includes/
│  ├─ class-ayn-loader.php      # Hook loader
│  ├─ class-ayn-plugin.php      # Core plugin singleton
│  ├─ admin/
│  │  ├─ class-ayn-admin-menu.php
│  │  ├─ class-ayn-admin-settings.php
│  │  ├─ class-ayn-admin-seasons.php
│  │  ├─ class-ayn-admin-services.php
│  │  ├─ class-ayn-admin-owners.php
│  │  ├─ class-ayn-admin-reports.php
│  │  └─ views/
│  ├─ products/
│  │  ├─ class-ayn-product-type-logement.php
│  │  ├─ class-ayn-product-metaboxes.php
│  │  └─ class-ayn-product-display.php
│  ├─ booking/
│  │  ├─ class-ayn-availability.php
│  │  ├─ class-ayn-booking-manager.php
│  │  ├─ class-ayn-pricing-engine.php
│  │  └─ class-ayn-ical-sync.php
│  ├─ owners/
│  │  ├─ class-ayn-owner-cpt.php
│  │  ├─ class-ayn-owner-roles.php
│  │  └─ class-ayn-owner-dashboard.php
│  ├─ payments/
│  │  ├─ class-ayn-stripe-connect-gateway.php
│  │  ├─ class-ayn-commission-engine.php
│  │  └─ class-ayn-payout-reports.php
│  ├─ frontend/
│  │  ├─ class-ayn-frontend-booking-form.php
│  │  ├─ class-ayn-frontend-shortcodes.php
│  │  ├─ class-ayn-elementor-widgets.php
│  │  ├─ js/
│  │  └─ css/
│  ├─ emails/
│  │  ├─ class-ayn-email-templates.php
│  │  └─ templates/
│  ├─ database/
│  │  ├─ class-ayn-db-installer.php
│  │  └─ class-ayn-db-migrations.php
│  ├─ helpers/
│  │  ├─ ayn-helpers-formatting.php
│  │  ├─ ayn-helpers-dates.php
│  │  └─ ayn-helpers-security.php
│  └─ assets/
│     ├─ css/
│     ├─ js/
│     └─ img/
├─ languages/
└─ docs/
   ├─ requirements.md
   └─ structure.md
```
