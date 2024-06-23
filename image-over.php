<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>research management system |Image over</title>
<style>
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: white;
}

.container:hover .overlay {
  opacity: 1;
  border-bottom:blue 6px solid;
  border-right:blue 2px solid;
  box-shadow:green 12px;
}

.text {
  color: black;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
</head>
<body>

<h2>Image hover</h2>
<p>Hover over the image to see its Explanation.</p>

<div class="container">
  <img src="../images/bul.png" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure nisi dolore obcaecati possimus ea reprehenderit, commodi odio numquam sed qui, totam molestiae? Autem.</div>
  </div>
</div>

</body>
</html>
