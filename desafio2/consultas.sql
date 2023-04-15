-- 1. O cliente gostaria de saber quantos produtos ele possui em cada categoria. Qual SQL você faria para realizar essa consulta?

SELECT categories.name as category, COUNT(products.id) as total_products
FROM categories
LEFT JOIN products ON categories.id = products.category_id
GROUP BY categories.id;

-- 2. Além disso, também quer saber a média de preços de cada categoria. Monte o SQL para essa solicitação

SELECT categories.name as category, AVG(products.price) as average_price
FROM categories
LEFT JOIN products ON categories.id = products.category_id
GROUP BY categories.id;

-- 3. Faça um SQL para atualizar todos os produtos da categoria Cremes e Geleias para a categoria Frutas

UPDATE products
SET category_id = (SELECT id FROM categories WHERE name = 'Frutas')
WHERE category_id = (SELECT id FROM categories WHERE name = 'Cremes e Geleias');