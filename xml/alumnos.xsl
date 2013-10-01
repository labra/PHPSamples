<?xml version="1.0" encoding="ISO-8859-1"?> 
<xsl:stylesheet version="1.0" 
      xmlns:xsl="http://www.w3.org/1999/XSL/Transform" >

<xsl:output method="html" />

<xsl:template match="/"> 
  <html>
    <head>
	<title>Alumnos</title>
	<link rel="stylesheet" href="alumnos.css" />
    </head>

  <body>
   <h1>Alumnos</h1>
   <xsl:apply-templates />
  </body>
 </html>
</xsl:template> 

<xsl:template match="alumnos">
<table border="1">
<caption>Lista de Alumnos</caption>
<tr>
<th>Nombre</th>
<th>Apellidos</th>
</tr>
<xsl:apply-templates />
</table>
</xsl:template>

<xsl:template match="alumno">
<tr>
<td>
 <xsl:value-of select="nombre" />
</td>
<td>
 <xsl:value-of select="apellidos"/>
</td>
<td>
<xsl:apply-templates />
</td>
</tr>
</xsl:template>

</xsl:stylesheet>




