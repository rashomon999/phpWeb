<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Mapa Conceptual - Globalización</title>
  <script type="module">
    import mermaid from "https://cdn.jsdelivr.net/npm/mermaid@11/dist/mermaid.esm.min.mjs";
    mermaid.initialize({ startOnLoad: true, theme: "forest" });
  </script>
  <style>
    body { font-family: sans-serif; margin: 20px; background: #f9fafb; }
    .mermaid { background: #fff; border-radius: 10px; padding: 20px; }
  </style>
</head>
<body>
  <h1>Mapa Conceptual: Globalización, Sociedad y Política</h1>
  <div class="mermaid">
    graph TD
      A["Revolución tecnológica (TIC)"]
      B["Economía informacional"]
      C["Economía en red"]
      D["Economía global"]
      E["Mercados financieros globales"]
      F["Economía criminal global"]
      G["Trabajo: flexibilización, autoempleo"]
      H["Desigualdad y polarización"]
      I["Crisis del Estado-nación"]
      J["Movimientos sociales / identidades"]
      K["América Latina: problemas específicos"]
      L["Propuestas: concertación, educación, descentralización"]

      %% Dimensiones
      Dim["Dimensiones del cambio"]
      DimEco["Económica"]
      DimLab["Laboral/Social"]
      DimPol["Política"]
      DimCult["Cultural/Identitaria"]
      DimCrim["Criminal"]

      %% Tipos de cambio
      Tipo["Tipos de cambio estructural"]
      TipoTec["Tecnológico"]
      TipoEco["Económico"]
      TipoSoc["Social"]
      TipoPol["Político"]
      TipoCult["Cultural"]

      %% Relaciones principales
      A --> B --> C --> D
      D --> E --> F
      C --> G --> H
      D --> I --> J
      H --> J
      K --> I
      L --> I

      %% Relaciones con dimensiones
      A --> Dim
      Dim --> DimEco --> B
      Dim --> DimLab --> G
      Dim --> DimPol --> I
      Dim --> DimCult --> J
      Dim --> DimCrim --> F

      %% Relaciones con tipos de cambio
      A --> Tipo
      Tipo --> TipoTec --> B
      Tipo --> TipoEco --> D
      Tipo --> TipoSoc --> G
      Tipo --> TipoPol --> I
      Tipo --> TipoCult --> J
  </div>
</body>
</html>
