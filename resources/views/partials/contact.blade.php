<x-layout>

    <div class="container mt-3 col-6">
  <h2 class="mb-5">Project Creator</h2>
  <div class="row">
    <div class="col-md-4 text-center pt-5">
      <img src="{{asset('storage/profile.png')}}" class="img-fluid rounded-circle" alt="Project Creator">
    </div>
    <div class="col-md-8">
      <h3>Kunal Kumar</h3>
      <p>As a web developer, my passion lies in crafting digital experiences that come to life on the internet. I thrive on transforming creative ideas into functional and user-friendly websites. With expertise in front-end technologies like HTML, CSS, and JavaScript, as well as back-end technologies such as PHP, MySQL, I'm dedicated to building responsive, secure, and visually engaging web applications. I'm also experienced in working with various frameworks like jQuery, Laravel. Whether it's designing user interfaces, optimizing site performance, or ensuring cross-browser compatibility, I'm committed to delivering solutions that make a positive impact on the web.</p>
      <p>Email: <a href="mailto:john@example.com">kunalkr0007@gmail.com</a></p>
      <p>Github : <a href="https://github.com/kunalkr0007">https://github.com/kunalkr0007</a></p>
    </div>
  </div>
</div>


<div class="container mt-5 col-6">
  <h2 class="mb-3">Contact Us</h2>
  <form action="process_form" method="post">
    <div class="form-group  mb-2">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group mb-2">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group mb-2">
      <label for="message">Message:</label>
      <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
  </form>
</div>






</x-layout>