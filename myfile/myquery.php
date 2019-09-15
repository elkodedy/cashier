<?php

SELECT table_purchase_transaction.*, table_purchase.*, table_users.name, table_suppliers.supplier_name 
FROM table_purchase_transaction
JOIN table_purchase ON table_purchase_transaction.purchase_transaction_id = table_purchase.purchase_transaction_id
JOIN table_users ON table_purchase_transaction.user_id = table_users.user_id
JOIN table_suppliers ON table_purchase_transaction.supplier_id = table_suppliers.supplier_id
GROUP BY table_purchase_transaction.purchase_transaction_id


?>