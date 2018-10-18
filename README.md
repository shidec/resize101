# Resize 101

How to get multiple size image depend on the requested URL.
It is needed by Imagemap message object for LINE messaging API.

It show 3 methods, you will just need to choose one of them.

### 1. Htaccess
The available image size depends on the existing folder and image

Test url : https://yourdomain/resize/images/brown/700
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
This is the most flexible, you can request any image size

Test url : https://yourdomain/resize/resize_image.php/brown/700
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
