# ArkHost VPSAG - WHMCS Server Module

A comprehensive WHMCS server module for integrating with the VPSAG VPS hosting platform. This module provides full automation for VPS provisioning, management, and client area functionality.

![Version](https://img.shields.io/badge/version-1.3-blue.svg)
![WHMCS](https://img.shields.io/badge/WHMCS-8.0+-green.svg)
![PHP](https://img.shields.io/badge/PHP-7.4+-blue.svg)
![License](https://img.shields.io/badge/license-Proprietary-red.svg)

## 🚀 Features

### ✅ Core VPS Management
- **Automated Provisioning** - Instant VPS creation with plan and OS selection
- **Account Suspension/Unsuspension** - Complete account lifecycle management
- **Account Termination** - Clean removal with data cleanup
- **Package Upgrades** - Seamless plan changes and resource scaling

### ✅ Client Area Features
- **Real-time Server Information** - CPU, RAM, Disk, and Bandwidth monitoring
- **Power Management** - Start, Stop, Reboot controls
- **VNC Console Access** - Direct browser-based console access
- **Performance Graphs** - Historical usage charts (hourly, daily, weekly, monthly, yearly)

### ✅ Advanced Management
- **Backup Management** - Create, restore, and delete backups
- **Firewall Configuration** - Manage firewall rules and policies
- **ISO Management** - Mount and eject ISO images
- **Hostname & rDNS** - Configure hostnames and reverse DNS
- **OS Reinstallation** - Fresh OS installation with multiple OS options
- **Root Password Reset** - Secure password reset functionality

### ✅ Admin Features
- **Balance & Discount Display** - Real-time account balance and discount information
- **Connection Testing** - Validate API credentials and connectivity
- **Comprehensive Logging** - Full API call logging for debugging
- **Multi-language Support** - Localized interface

## 📋 Requirements

- **WHMCS** 8.0 or higher
- **PHP** 7.4 or higher
- **cURL** extension enabled
- **Valid VPSAG API credentials**

## 📦 Installation

1. **Download the module files** and extract to your WHMCS directory:
   ```
   /path/to/whmcs/modules/servers/ArkhostVPSAG/
   ```

2. **Ensure proper file permissions**:
   ```bash
   chmod -R 755 modules/servers/ArkhostVPSAG/
   ```

3. **Log into WHMCS Admin Area** and navigate to:
   ```
   Setup → Products/Services → Servers
   ```

4. **Add a new server** with the following details:
   - **Server Type**: ArkhostVPSAG
   - **Hostname**: VPSAG API endpoint
   - **Username**: Your VPSAG API username
   - **Password**: Your VPSAG API key

## ⚙️ Configuration

### Server Setup

1. **Create a Server Group** (optional but recommended)
2. **Add Server** with VPSAG credentials
3. **Test Connection** to verify API access

### Product Configuration

1. **Create a new product** in WHMCS
2. **Select Module**: ArkhostVPSAG
3. **Configure Module Settings**:
   - **Plan**: Select from available VPSAG plans
   - **Operating System**: Choose default OS or allow client selection

### Configurable Options

The module supports two main configurable options:

- **`planid`** - VPSAG plan identifier
- **`osid`** - Operating system identifier

## 🏗️ File Structure

```

/modules/servers/ArkhostVPSAG/
├── ArkhostVPSAG.php          # Main module file
├── callback.php              # Webhook handler
├── README.md                 # This file
├── lang/                     # Language files
│   ├── english.php
│   └── [other languages]
└── template/                 # Client area templates
    ├── clientarea_direct.tpl # Main client template
    ├── error.tpl            # Error template
    ├── css/
    │   └── app.min.css      # Styles
    ├── js/
    │   └── app.min.js       # JavaScript
    └── img/                 # Images and icons
        ├── os/              # OS icons
        └── [status icons]
```

## 🔌 API Integration

The module integrates with VPSAG API v1 endpoints:

### Authentication
```php
Headers: 
X_API_USER: [username]
X_API_KEY: [api_key]
```

### Base URL
```
https://www.vpsag.com/api/v1/
```

### Key Endpoints Used
- `GET /plans` - Retrieve available plans
- `POST /order/plan` - Create new VPS
- `GET /vps/{id}` - Get server information
- `POST /vps/{id}/action/{action}` - Power management
- `GET /vps/{id}/graph/{period}` - Performance graphs
- `POST /vps/{id}/backup` - Backup management
- `POST /vps/{id}/firewall` - Firewall management

## 🎛️ Client Area Functionality

The module provides a comprehensive client area interface with:

### Navigation Tabs
- **Overview** - Server status and resource usage
- **Graphs** - Performance monitoring charts
- **Backups** - Backup management interface  
- **Settings** - Server configuration options

### Settings Sections
- **Hostname** - Configure server hostname and rDNS
- **ISO Management** - Mount/unmount ISO images
- **Password Reset** - Reset root password
- **Reinstall** - Complete OS reinstallation
- **Firewall** - Manage firewall rules

## 🔧 Webhook Configuration

The module includes a webhook handler (`callback.php`) for processing VPSAG notifications:

1. **Configure in VPSAG** panel to point to:
   ```
   https://yourdomain.com/modules/servers/ArkhostVPSAG/callback.php
   ```

2. **Webhook handles**:
   - VPS provisioning completion
   - IP address assignment
   - Service activation notifications

## 🐛 Troubleshooting

### Common Issues

**Connection Failed**
- Verify API credentials are correct
- Check server can reach VPSAG API endpoints
- Ensure cURL is enabled and functional

**VPS Not Found**
- Check if VPS ID is properly stored in service properties
- Verify VPS exists in VPSAG panel
- Check service custom fields for VPSAG ID

**Client Area Not Loading**
- Verify template files have correct permissions
- Check for PHP errors in WHMCS logs
- Ensure all required files are uploaded

### Debug Mode

Enable WHMCS module logging to troubleshoot API issues:
1. Go to **Utilities → Logs → Module Log**
2. All API calls and responses are logged for debugging

## 📝 Changelog

### Version 1.3
- Fixed CPU usage display underreporting issue
- Removed duplicate API cases and dead code
- Improved error handling and logging
- Enhanced client area interface
- Added comprehensive backup management
- Implemented firewall configuration

## 🆘 Support

For technical support and module-related queries:

- **Email**: support@arkhost.com
- **Website**: https://arkhost.com
- **Documentation**: Check WHMCS module logs for detailed error information

## 📄 License

This module is proprietary software owned by ArkHost. All rights reserved.

**Copyright © 2024 ArkHost**

---

*For the latest updates and documentation, visit our website at https://arkhost.com* 
