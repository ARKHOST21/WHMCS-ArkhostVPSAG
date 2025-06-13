# ArkHost VPSAG WHMCS Module

WHMCS server module for VPSAG VPS platform integration.

## Requirements

- WHMCS 8.0+
- PHP 7.4+
- cURL extension
- VPSAG API credentials

## Installation

1. Extract to `/path/to/whmcs/modules/servers/ArkhostVPSAG/`
2. Set permissions: `chmod -R 755 modules/servers/ArkhostVPSAG/`
3. In WHMCS admin: Setup → Products/Services → Servers
4. Add server:
   - Type: ArkhostVPSAG
   - Hostname: VPSAG API endpoint
   - Username: API username
   - Password: API key

## Configuration

- Create server with ArkhostVPSAG module type
- Enter VPSAG API credentials
- Test connection

- Create product
- Select module: ArkhostVPSAG
- Set plan ID and OS ID

Configurable options:
- `planid` - VPSAG plan identifier
- `osid` - Operating system identifier

## File Structure

```
/modules/servers/ArkhostVPSAG/
├── ArkhostVPSAG.php
├── callback.php
├── README.md
├── lang/
│   └── english.php
└── template/
    ├── clientarea_direct.tpl
    ├── error.tpl
    ├── css/
    ├── js/
    └── img/
```

## API Integration

Base URL: `https://www.vpsag.com/api/v1/`

Headers:
X_API_USER: [username]
X_API_KEY: [api_key]


Endpoints:
- `GET /plans`
- `POST /order/plan`
- `GET /vps/{id}`
- `POST /vps/{id}/action/{action}`
- `GET /vps/{id}/graph/{period}`
- `POST /vps/{id}/backup`
- `POST /vps/{id}/firewall`

## Webhook

VPSAG webhook URL:  
`https://yourdomain.com/modules/servers/ArkhostVPSAG/callback.php`

Handles:
- VPS provisioning completion
- IP assignment
- Service activation

## Troubleshooting

Enable module logging: Utilities → Logs → Module Log

Common issues:
- Connection failed: Check API credentials and connectivity
- VPS not found: Verify VPS ID in service properties
- Client area not loading: Check file permissions and PHP logs

## Support

support@arkhost.com

## License

Proprietary. Copyright © 2024 ArkHost.
