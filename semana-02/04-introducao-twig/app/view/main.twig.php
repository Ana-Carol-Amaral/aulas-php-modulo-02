{% apply spaceless %}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twig</title>
</head>

<body>
    
    <header>
        <h1>Twig</h1>
    </header>

    <section>
        {% block body %}{% endblock %}
    </section>

    {% include 'footer.twig.php' %}

</body>

</html>
{% endapply %}