-- database: ../test.sqlite
-- MEALS
CREATE TABLE meals (
  id INTEGER NOT NULL UNIQUE,
  eatery_id INTEGER NOT NULL,
  name TEXT NOT NULL,
  serving_size INT NOT NULL,
  cal INT NOT NULL,
  cal_from_fat INT NOT NULL,
  total_fat INT NOT NULL,
  --g
  cholesterol INT NOT NULL,
  sodium INT NOT NULL,
  --mg
  potassium INT NOT NULL,
  --mg
  total_carbs INT NOT NULL,
  --g
  protein INT NOT NULL,
  --g
  PRIMARY KEY(id AUTOINCREMENT) FOREIGN KEY(eatery_id) REFERENCES eateries(id)
);

-- cafe jennies
INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    1,
    2,
    'Beef Brisket Sandwich',
    309,
    580,
    315,
    35,
    75,
    1060,
    360,
    37,
    25
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    2,
    2,
    'Asian Sesame Chicken Sandwich',
    340,
    680,
    342,
    38,
    85,
    1610,
    250,
    53,
    34
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    3,
    2,
    'Chicken Milano Foccacia Sandwich',
    309,
    630,
    324,
    36,
    120,
    1910,
    310,
    35,
    42
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    4,
    2,
    'Ham & Brie Sandwich',
    269,
    420,
    216,
    24,
    75,
    1440,
    30,
    27,
    22
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    5,
    2,
    'Cauliflower Po Boy Sandwich',
    317,
    470,
    162,
    18,
    0,
    1360,
    490,
    62,
    12
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    6,
    2,
    'Citrus Ginger Salmon Wrap',
    397,
    770,
    360,
    40,
    75,
    740,
    350,
    75,
    31
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    7,
    2,
    'Rainbow Tofu Bahn Mi Sandwich',
    368,
    340,
    135,
    15,
    0,
    740,
    280,
    42,
    8
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    8,
    2,
    'Side Salad',
    79,
    60,
    27,
    3,
    0,
    140,
    210,
    9,
    1
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    9,
    2,
    'Steel Cut Oatmeal Bowl',
    222,
    130,
    18,
    2,
    0,
    65,
    0,
    23,
    4
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    10,
    2,
    'The Traditional - English Muffin',
    145,
    420,
    207,
    23,
    385,
    860,
    0,
    28,
    25
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    11,
    2,
    'The Traditional Egg White English Muffin',
    167,
    280,
    81,
    9,
    30,
    830,
    150,
    28,
    21
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    12,
    2,
    'The Traditional - Croissant',
    164,
    570,
    324,
    36,
    385,
    870,
    0,
    36,
    20
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    13,
    2,
    'The Traditional Egg White - Croissant',
    187,
    430,
    198,
    22,
    30,
    830,
    150,
    36,
    16
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    14,
    2,
    'The California - English Muffin',
    223,
    530,
    297,
    33,
    355,
    800,
    220,
    34,
    22
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    15,
    2,
    'The California Egg White English Muffin',
    245,
    380,
    180,
    20,
    0,
    770,
    370,
    33,
    18
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    16,
    2,
    'The California - Croissant',
    242,
    680,
    414,
    46,
    355,
    800,
    220,
    42,
    17
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    17,
    2,
    'The California Egg White - Croissant',
    265,
    530,
    297,
    33,
    0,
    770,
    370,
    42,
    13
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    18,
    2,
    'The Garden - English Muffin',
    166,
    410,
    198,
    22,
    370,
    770,
    210,
    30,
    21
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    19,
    2,
    'The Garden Egg White - English Muffin',
    189,
    260,
    81,
    9,
    15,
    740,
    360,
    30,
    17
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    20,
    2,
    'The Garden Egg White - Croissant',
    208,
    410,
    198,
    22,
    15,
    740,
    360,
    38,
    12
  );

-- Crossings Cafe
INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    21,
    3,
    'Just Egg Breakfast Sandwich',
    157,
    340,
    153,
    17,
    0,
    740,
    55,
    36,
    12
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    22,
    3,
    'Egg & Cheese English Muffin',
    108,
    250,
    90,
    10,
    195,
    590,
    80,
    27,
    14
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    23,
    3,
    'Bacon, Egg & Cheese English Muffin',
    142,
    350,
    153,
    17,
    215,
    930,
    180,
    27,
    21
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    24,
    3,
    'Ham, Egg & Cheese on English Muffin',
    158,
    310,
    99,
    11,
    230,
    1130,
    80,
    28,
    24
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    25,
    3,
    'Avocado & Egg Toast',
    218,
    400,
    198,
    22,
    185,
    790,
    250,
    38,
    16
  );

-- Cornell Dairy Bar
INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    26,
    4,
    'Grilled Chicken & Avocado on Panini',
    327,
    840,
    405,
    45,
    75,
    1530,
    150,
    69,
    45
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    27,
    4,
    'Fresh Vegetable & Hummus Wrap',
    376,
    570,
    189,
    21,
    0,
    1020,
    760,
    80,
    18
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    28,
    4,
    'Black Bean Veggie Burger on Multigrain',
    270,
    530,
    135,
    15,
    0,
    1600,
    330,
    83,
    21
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    29,
    4,
    'Ham Grilled Cheese Panini Sandwich',
    277,
    650,
    234,
    26,
    105,
    1910,
    20,
    63,
    43
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    30,
    4,
    'Chipotle Chicken Wrap',
    287,
    610,
    252,
    28,
    75,
    1360,
    320,
    54,
    33
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    31,
    4,
    'Egg & Cheese Breakfast Sandwich',
    116,
    230,
    72,
    8,
    130,
    650,
    105,
    28,
    12
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    32,
    4,
    'Egg Bacon & Cheese Breakfast Sandwich',
    137,
    320,
    135,
    15,
    150,
    990,
    200,
    29,
    19
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    33,
    4,
    'Egg Sausage & Cheese Breakfast Sandwich',
    159,
    400,
    216,
    24,
    165,
    930,
    190,
    28,
    19
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    34,
    4,
    'Egg, Turkey Sausage & Cheese Sandwich',
    173,
    350,
    153,
    17,
    185,
    1020,
    220,
    28,
    21
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    35,
    4,
    'Egg Ham & Cheese Breakfast Sandwich',
    173,
    290,
    90,
    10,
    160,
    1190,
    105,
    29,
    22
  );

-- Big Red Barn
INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    36,
    5,
    'Asian Sesame Chicken Sandwich',
    340,
    680,
    342,
    38,
    85,
    1610,
    250,
    53,
    34
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    37,
    5,
    'Grilled Chicken Pesto & Roasted Roma',
    454,
    660,
    270,
    30,
    90,
    2120,
    580,
    55,
    42
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    38,
    5,
    'BBQ Pork Cubano Panini',
    347,
    780,
    342,
    38,
    115,
    2840,
    310,
    66,
    45
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    39,
    5,
    'Vegan Mediterranean Wrap',
    411,
    790,
    306,
    34,
    0,
    1170,
    710,
    103,
    27
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    40,
    5,
    'Portabella Mushroom Panini Melt',
    312,
    670,
    297,
    33,
    35,
    950,
    440,
    75,
    24
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    41,
    5,
    'Mixed Greens with Balsamic Vinaigrette',
    57,
    50,
    41,
    4,
    0,
    45,
    125,
    2,
    1
  );

-- Mattin's
INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    42,
    6,
    'Chicken Chipotle Wrap',
    287,
    610,
    252,
    28,
    75,
    1360,
    320,
    54,
    33
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    43,
    6,
    'Spicy Italian Wrap',
    315,
    580,
    234,
    26,
    60,
    2060,
    340,
    58,
    26
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    44,
    6,
    'The Vegetarian Hot Wrap',
    354,
    660,
    342,
    38,
    30,
    1240,
    740,
    64,
    15
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    45,
    6,
    'Chicken Club',
    280,
    620,
    270,
    30,
    100,
    1470,
    270,
    44,
    41
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    46,
    6,
    'Hot Turkey Club',
    311,
    590,
    261,
    29,
    100,
    1660,
    270,
    45,
    39
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    47,
    6,
    'Italian Antipasto Sub',
    517,
    1080,
    414,
    46,
    105,
    2940,
    360,
    113,
    48
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    48,
    6,
    'Chicken Bacon Ranch Sandwich',
    301,
    740,
    315,
    35,
    105,
    2020,
    240,
    56,
    48
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    49,
    6,
    'Chickpea of the Sea Salad Sandwich',
    255,
    410,
    99,
    11,
    0,
    820,
    440,
    62,
    15
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    50,
    6,
    'Kosher Dill Pickle Spear',
    28,
    0,
    0,
    0,
    0,
    210,
    0,
    1,
    1
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    51,
    6,
    'Egg & Cheese Breakfast Sandwich',
    116,
    230,
    72,
    8,
    130,
    650,
    105,
    28,
    12
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    52,
    6,
    'Egg Bacon & Cheese Breakfast Sandwich',
    137,
    320,
    135,
    15,
    150,
    990,
    200,
    29,
    19
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    53,
    6,
    'Egg Sausage & Cheese Breakfast Sandwich',
    159,
    400,
    216,
    24,
    165,
    930,
    190,
    28,
    19
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    54,
    6,
    'Egg Ham & Cheese Breakfast Sandwich',
    173,
    290,
    90,
    10,
    160,
    1190,
    105,
    29,
    22
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    55,
    6,
    'Boneless BBQ Chicken Wings',
    262,
    620,
    144,
    16,
    95,
    2290,
    0,
    82,
    35
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    56,
    6,
    'Buffalo Boneless Chicken Wings',
    262,
    780,
    432,
    48,
    120,
    3570,
    0,
    42,
    37
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    57,
    6,
    'Sweet Chili Boneless Chicken Wings',
    249,
    700,
    144,
    16,
    95,
    2820,
    0,
    100,
    35
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    58,
    6,
    'Cheese Quesadilla',
    192,
    680,
    351,
    39,
    80,
    1280,
    140,
    54,
    28
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    59,
    6,
    'Chicken Quesadilla',
    275,
    820,
    387,
    43,
    140,
    1770,
    140,
    54,
    50
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    60,
    7,
    'Green Goddess Sandwich',
    190,
    530,
    252,
    28,
    55,
    710,
    410,
    41,
    26
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    61,
    7,
    'Portabella Mushroom Melt Sandwich',
    310,
    570,
    360,
    40,
    45,
    570,
    450,
    40,
    16
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    62,
    7,
    'Spicy BLT Sandwich',
    260,
    750,
    387,
    43,
    60,
    1580,
    370,
    65,
    28
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    63,
    7,
    'French Dip Sandwich',
    468,
    730,
    180,
    20,
    115,
    2610,
    1180,
    75,
    56
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    64,
    7,
    'Muffaletta Sandwich',
    419,
    700,
    333,
    37,
    95,
    2830,
    410,
    55,
    34
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    65,
    7,
    'Chicken Panini',
    365,
    780,
    270,
    30,
    85,
    1970,
    360,
    81,
    47
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    66,
    7,
    'Smokey Jack Panini',
    339,
    730,
    243,
    27,
    60,
    2370,
    330,
    78,
    45
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    67,
    2,
    'The Garden - Croissant',
    186,
    560,
    315,
    35,
    370,
    770,
    210,
    39,
    16
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    67,
    2,
    'The Garden - Croissant',
    186,
    560,
    315,
    35,
    370,
    770,
    210,
    39,
    16
  );

INSERT INTO
  meals (
    id,
    eatery_id,
    name,
    serving_size,
    cal,
    cal_from_fat,
    total_fat,
    cholesterol,
    sodium,
    potassium,
    total_carbs,
    protein
  )
VALUES
  (
    68,
    8,
    'Egg & Cheese Breakfast Sandwich',
    177,
    380,
    126,
    14,
    325,
    770,
    125,
    41,
    20
  );

-- EATERIES
CREATE TABLE eateries (
  id INTEGER NOT NULL UNIQUE,
  name TEXT NOT NULL,
  PRIMARY KEY(id AUTOINCREMENT)
);

INSERT INTO
  eateries (id, name)
VALUES
  (1, 'Bus Stop Bagels');

INSERT INTO
  eateries (id, name)
VALUES
  (2, 'Cafe Jennie');

INSERT INTO
  eateries (id, name)
VALUES
  (3, 'Crossings Café');

INSERT INTO
  eateries (id, name)
VALUES
  (4, 'Cornell Dairy Bar');

INSERT INTO
  eateries (id, name)
VALUES
  (5, 'The Big Red Barn');

INSERT INTO
  eateries (id, name)
VALUES
  (6, "Mattin's");

INSERT INTO
  eateries (id, name)
VALUES
  (7, "Goldie's");

INSERT INTO
  eateries (id, name)
VALUES
  (8, "Atrium Café");

INSERT INTO
  eateries (id, name)
VALUES
  (9, "Mann Café");

INSERT INTO
  eateries (id, name)
VALUES
  (10, "Martha's");

INSERT INTO
  eateries (id, name)
VALUES
  (11, "Risley Dining");
