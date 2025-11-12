# WHMCS VPS Management Module - ArkHost VPSAG

A WHMCS server module for VPS management with multi-language support.

## Features

- VPS control (start/stop/restart)
- Backup management
- Firewall configuration
- OS reinstallation with advanced options
- Resource monitoring
- VNC console access
- 8 language support
- Responsive design

## Requirements

- WHMCS 8.9+
- PHP 7.4+


## Changelog

### Version 1.4
- Fixed firewall rule duplication bug when adding new rules
- Added validation warning for ANY protocol with specific port numbers
- Redesigned firewall interface with modern card-based layout
- Created standalone Firewall tab for better organization
- Completely redesigned VPS Overview section with:
  - Server Status Card (hostname, IPs, OS, status, uptime, server type)
  - Resource Allocation Card (CPU cores, Memory, Storage, Traffic)
  - Resource Usage Card (RAM, Bandwidth, CPU)
  - Quick Actions Card (Start/Stop, Restart, VNC Console)
- Fixed Quick Actions button functionality
- Completed all language translations (8 languages: English, Dutch, French, German, Italian, Portuguese, Russian, Spanish)
- Enhanced UI styling with gradient backgrounds and smooth animations
- Improved responsive design and layout consistency
- Removed duplicate VPS Information section
- Optimized resource display (removed redundant disk space usage)

### Version 1.3
- Enhanced API integration
- Performance improvements
- Bug fixes

### Version 1.2
- Custom notifications replace browser popups
- Confirmation dialogs for critical actions
- Multi-language support for all notifications
- Smart post-installation script examples based on OS
- Fixed firewall rules not displaying after creation
- Improved UI styling and animations

### Version 1.1
- Basic VPS management
- Backup operations
- Firewall rules
- OS reinstall

### Version 1.0
- Initial release


MIT License
© 2025 ArkHost
