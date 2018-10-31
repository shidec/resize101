# Resize 101

Get multiple size of image depend on the requested URL.
It is needed by Imagemap message object for LINE messaging API.

Try it on https://resize101.herokuapp.com/

### Note
actually this project only consists of the following files:
- .htaccess
- index.php
- folder_select.php
- resize_image.php
- 460 (folder containing images)
- 700 (folder containing images)
- 1040 (folder containing images)

The other files and folder (composer.json, composer.lock, folder vendor) are additional because Heroku need composer to activate GD library for image resizing.

# Method available
This project show 3 methods, you will just need to choose one of them.

### 1. Htaccess
The available image size depends on the existing folder and image

Test url : https://yourdomain/images/brown/700

JSON example for LINE Messaging API:
```java
{
  "type": "imagemap",
  "baseUrl": "https://yourdomain/images/brown",
  "altText": "This is an imagemap",
  "baseSize": {
      "height": 1040,
      "width": 1040
  }
```
### 2. Folder selection
The available image size depends on the existing folder and image

Test url : https://yourdomain/folder_select.php/brown/700

JSON example for LINE Messaging API:
```java
{
  "type": "imagemap",
  "baseUrl": "https://yourdomain/folder_select.php/brown",
  "altText": "This is an imagemap",
  "baseSize": {
      "height": 1040,
      "width": 1040
  }
```

### 3. Image resizing
This is the most flexible, you can request any image size.
It use GD library on your PHP server.

Test url : https://yourdomain/resize_image.php/brown/700

JSON example for LINE Messaging API:
```java
{
  "type": "imagemap",
  "baseUrl": "https://yourdomain/resize_image.php/brown",
  "altText": "This is an imagemap",
  "baseSize": {
      "height": 1040,
      "width": 1040
  }
```
