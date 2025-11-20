# Ayn Booking Plugin Requirements (V1 Scope)

## Product Positioning and Objectives
- **Plugin name:** Ayn Booking, a WooCommerce-based lodging reservation solution tailored to French conciergeries.
- **Compliance goal:** Conciergeries without a "carte G" only receive commissions and revenue from additional services; lodging income goes directly to property owners via Stripe Connect split.

## Key Functional Decisions
- **Owner interaction:** Owners do not access the WordPress back office. Their only required action is to complete Stripe account onboarding via emailed requests. Conciergeries manage listings, calendars, and reports on behalf of owners.
- **iCal synchronization:** Automatic import/export with the lowest possible frequency supported by WordPress/cron to keep calendars in sync without manual intervention.
- **Tax handling:** Tax calculation is delegated entirely to WooCommerce; the plugin should not introduce custom tax computation.

## Core Features (V1)
- Custom WooCommerce product type for lodgings with tabs for characteristics, equipment, location, seasons/pricing, services, and owner association.
- Global configuration screens for seasons, services, long-stay discounts, fees, and Stripe Connect.
- Booking stack using custom tables for availability, reservations, and commissions, with an AJAX pricing engine and cart/checkout integration.
- Stripe Connect payment flow that splits the total so conciergeries receive only their commission plus 100% of additional services, and owners receive the remaining lodging revenue.
- Owner onboarding email flow to collect Stripe details; status tracked in the admin interface.

## Roadmap Notes
- **V1:** Back-office management by conciergeries, automated iCal sync, Stripe split payments, and reports/exports.
- **V2 (future):** Optional front-end owner dashboard if needed, enhanced iCal logging and scheduling controls, advanced hold/pre-reservation options, and richer reporting/graphs.
