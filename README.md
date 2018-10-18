# Resize 101

Get multiple size of image depend on the requested URL.
It is needed by Imagemap message object for LINE messaging API.

Try it on https://resize101.herokuapp.com/

It show 3 methods, you will just need to choose one of them.

### 1. Htaccess
The available image size depends on the existing folder and image

Test url : https://yourdomain/resize/images/brown/700

JSON example for LINE Messaging API:
```java
{
  "type": "imagemap",
  "baseUrl": "https://yourdomain/resize/images/brown",
  "altText": "This is an imagemap",
  "baseSize": {
      "height": 1040,
      "width": 1040
  }
```
### 2. Folder select
The available image size depends on the existing folder and image

Test url : https://yourdomain/resize/folder_select.php/brown/700

JSON example for LINE Messaging API:
```java
{
  "type": "imagemap",
  "baseUrl": "https://yourdomain/resize/folder_select.php/brown",
  "altText": "This is an imagemap",
  "baseSize": {
      "height": 1040,
      "width": 1040
  }
```

### 3. Resize image
This is the most flexible, you can request any image size.
It use GD library on your PHP server.

Test url : https://yourdomain/resize/resize_image.php/brown/700

JSON example for LINE Messaging API:
```java
{
  "type": "imagemap",
  "baseUrl": "https://yourdomain/resize/resize_image.php/brown",
  "altText": "This is an imagemap",
  "baseSize": {
      "height": 1040,
      "width": 1040
  }
```
