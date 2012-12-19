SELECT zaehlerstand
FROM   erdgas
WHERE  zaehlerstand=(SELECT MAX(zaehlerstand) FROM erdgas)