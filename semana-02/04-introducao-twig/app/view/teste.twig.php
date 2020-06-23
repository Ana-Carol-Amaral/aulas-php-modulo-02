{% extends "main.twig.php" %}

{% block body %}

<div>
    <h1>{{data | date(DATE_FORMAT)}}</h1>

    {% if mensagem | length <=40 %}

    <h1>{{mensagem | slice (0, 20)}}</h1>

    {% endif %}

    <ul>
        {% set indice = 1 %}

        {% for cid in cidades %}

        <li>{{indice}} - {{cid}}</li>

        {% set indice = indice + 1 %}
        {% endfor %}

    </ul>

    <hr>
    {{VAR_NAME}}

    {% if idade >= 18 %}
    <p>Pode entrar, {{nome}}</p>

    {% else %}
    <p>Não pode entrar sozinho</p>

    {% endif %}

</div>

{% endblock %}