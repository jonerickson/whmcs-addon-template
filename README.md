# WHMCS Addon Template

## Symlinking

You will need to symlink your addon into where ever you are hosting your base WHMCS installation.

```bash
ln -s  /path/to/repository/whmcs-addon-template/src /path/to/whmcs/modules/addons/hello_world
```

## Client Area

You can access the client area default page at: `http://your-url/index.php?m=hello_world`

## Admin Area 

You can access the admin area default page at: `http://your-url/admin/addonmodules.php?module=hello_world`