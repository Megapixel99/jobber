<?php require("phplib/content-funcs.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset='utf-8' />
<meta http-equiv="X-UA-Compatible" content="chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
  content="Jobber: An alternative to cron, with sophisticated status-reporting and error-handling." />

<link rel="stylesheet"
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
  crossorigin="anonymous" />

<link rel="stylesheet" href="/jobber/stylesheets/app.css" />

<script src="https://use.fontawesome.com/9c63186c95.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"
  type="text/javascript"></script>

<script
  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
  crossorigin="anonymous" type="text/javascript"></script>

<title>Jobber Security</title>
</head>

<body data-spy="scroll" data-target="#toc-container" data-offset="100">

  <!-- NAV BAR -->
  <?php makeSubpageNavbar("security"); ?>

  <header class="container">
    <h1>Jobber Security</h1>
  </header>

  <!-- MAIN CONTENT -->
  <div class="container">
    <section>
      <p>Like cron, Jobber enables different users to run their own sets of
        jobs. The main security requirement is that Jobber does not enable users
        to do something they otherwise would not be allowed to do. In
        particular, the set of commands that a user can execute via Jobber must
        be a subset of the set of commands that the user can execute in the
        shell.</p>

      <p>
        The Jobber project follows <a
          href="https://bestpractices.coreinfrastructure.org/">Core
          Infrastructure Initiative best practices</a>: <a
          href="https://bestpractices.coreinfrastructure.org/projects/1476"><img
          src="https://bestpractices.coreinfrastructure.org/projects/1476/badge"></a>
      </p>

      <p>
        Note that Jobber has <em>not</em> been thoroughly and expertly reviewed
        with regard to security. (Of course, neither has most software....)
        Meeting its security requirements is indeed a goal, but, as made clear
        in <a href="https://github.com/dshearer/jobber/blob/master/LICENSE">the
          license</a>, the authors make no guarantee that there are no
        vulnerabilities in Jobber.
      </p>
    </section>

    <aside class="alert alert-warning">
      <h4 class="alert-heading">Warning</h4>
      Privilege-escalation is possible if the OS on which Jobber runs allows
      non-root users to change the owner of a file to another user. Fortunately,
      this is not possible in Linux and is not common in other kinds of Unix.
    </aside>

    <section>
      <h2>Reporting Vulnerabilities</h2>

      <p>If you discover a vulnerability in Jobber, please send a
        description of it to jobber-security@nekonya.info.</p>

      <p>
        <em>Please,</em> do <strong>NOT</strong> discuss it on the Jobber
        mailing list or in a GitHub issue &mdash; or, really, anywhere. If you
        do, you are a bad person.
      </p>
    </section>
  </div>
</body>

</html>