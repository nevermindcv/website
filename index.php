<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<style>
  .red-text {
    color: red;
  }

  h2 {
    font-family: Lobster, Monospace;
  }

  p {
    font-size: 16px;
    font-family: Monospace;
  }

  .thick-green-border {
    border-color: pink;
    border-width: 7px;
    border-style: solid;
    border-radius: 50%;
  }

  .smaller-image {
    width: 100px;
  }
</style>

<h2 class="red-text">Rajesh Ramayan's Sexy Web</h2>

<p>Click here for <a href="#">Rajesh's Sexy Pics</a>.</p>

<a href="#"><img class="smaller-image thick-green-border" alt="Rajesh pic" src="https://pbs.twimg.com/profile_images/840990186779549696/rLFVPRPu_400x400.jpg"></a>

<p>About Me</p>

<p>My name is Raj, my best friend is Howard Wolowitz, with whom I share what Nayyar calls a "bromance", although our relationship is frequently made awkward by my metrosexuality. I work as an astrophysicist in the Physics Department at Caltech. I had selective mutism, which did not allow me to talk to women outside of his family unless he was under the influence of alcohol (or medication), until 4 years ago.</p>

<p>Things Raj loves:</p>
<ul>
  <li>Small Dogs</li>
  <li>Star Wars</li>
  <li>Wolowitz</li>
</ul>
<p>Top 3 things Raj hates:</p>
<ol>
  <li>Talk to girls</li>
  <li>Stewart</li>
  <li>Do Sports</li>
</ol>
<form action="/submit-emil-photo">
  <label><input type="checkbox" name="personality"> Funny</label>
  <label><input type="checkbox" name="personality"> Smart</label>
  <label><input type="checkbox" name="personality"> Formal</label>
  <label><input type="radio" name="indoor-outdoor"> Indoor</label>
  <label><input type="radio" name="indoor-outdoor"> Outdoor</label>
  <input type="text" placeholder="Raj's photo URL" required>
  <button type="submit">Submit</button>
</form>