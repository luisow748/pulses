<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script defer src="/js/all.min.js"></script>
    <title>Lista de Tarefas - Pulse</title>

  </head>
  <body>
    @inertia

    <script>
        export default{
            head () {
                return {
                    title: "Tarefas",
                }
            }
        }
    </script>
  </body>
</html>
