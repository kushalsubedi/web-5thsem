<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match= "/class" >
    <html>
        <body>
            <h2> Student list </h2>

            <table border="1" style="border-collapse:collapse">
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Grade</th>
                </tr>
                <xsl:for-each select="student">
                    <tr>
                        <td><xsl:value-of select="name"/></td>
                        <td><xsl:value-of select="age"/></td>
                        <td><xsl:value-of select="grade"/></td>
                    </tr>
                    </xsl:for-each>
            </table>
        </body>
    </html>
</xsl:template>
</xsl:stylesheet>