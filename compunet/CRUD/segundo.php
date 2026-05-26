<?php
 
for ($i = 1; $i <= 230; $i++) {
    ${"respuesta_" . $i} = '';
}
 

     
for ($i = 1; $i <= 230; $i++) {
    ${"verificar_" . $i} = '';
}

     

$mostrar_solucion = ''; 
if ($_POST) {
    $mostrar_solucion = isset($_POST['mostrar_solucion']) ? $_POST['mostrar_solucion'] : '';
    
    if ($mostrar_solucion === 'mostrar_solucion') {        
 
$respuesta_1='import {';
$respuesta_2='Box, Typography, Button, TextField,';
$respuesta_3='} from "@mui/material";';
$respuesta_4='import { useEffect, useState } from "react";';
$respuesta_5='import {';
$respuesta_6='getAllGames, createGame, deleteGame, updateGame,';
$respuesta_7='} from "./services/games.service";';
$respuesta_8='export default function Dashboard() {';
$respuesta_9='const [games, setGames] = useState([]);';
$respuesta_10='const [newGame, setNewGame] = useState({';
$respuesta_11='name: "", description: "", minPlayers: "", maxPlayers: "", category: "", userId: 1,';
$respuesta_12='});';
$respuesta_13='const [editingId, setEditingId] = useState(null);';
$respuesta_14='useEffect(() => {';
$respuesta_15='const fetchData = async () => {';
$respuesta_16='try {';
$respuesta_17='const data = await getAllGames();';
$respuesta_18='setGames(data);';
$respuesta_19='} catch (error) {';
$respuesta_20='console.error(error);';
$respuesta_21='}';
$respuesta_22='};';
$respuesta_23='fetchData();';
$respuesta_24='}, []);';
$respuesta_25='const handleCreateGame = async () => {';
$respuesta_26='try {';
$respuesta_27='const createdGame = await createGame({';
$respuesta_28='...newGame,';
$respuesta_29='minPlayers: Number(newGame.minPlayers),';
$respuesta_30='maxPlayers: Number(newGame.maxPlayers),';
$respuesta_31='});';
$respuesta_32='setGames((prev) => [...prev, createdGame]);';
$respuesta_33='setNewGame({ name: "", description: "", minPlayers: "", maxPlayers: "", category: "", userId: 1 });';
$respuesta_34='} catch (error) { console.error(error); }';
$respuesta_35='};';
$respuesta_36='const handleDeleteGame = async (id) => {';
$respuesta_37='try {';
$respuesta_38='await deleteGame(id);';
$respuesta_39='setGames((prev) => prev.filter((game) => game.id !== id));';
$respuesta_40='} catch (error) { console.error(error); }';
$respuesta_41='};';
$respuesta_42='const handleUpdateGame = async () => {';
$respuesta_43='try {';
$respuesta_44='const updatedGame = await updateGame(editingId, {';
$respuesta_45='...newGame,';
$respuesta_46='minPlayers: Number(newGame.minPlayers),';
$respuesta_47='maxPlayers: Number(newGame.maxPlayers),';
$respuesta_48='});';
$respuesta_49='setGames((prev) => prev.map((game) => game.id === editingId ? updatedGame : game));';
$respuesta_50='setEditingId(null);';
$respuesta_51='setNewGame({ name: "", description: "", minPlayers: "", maxPlayers: "", category: "", userId: 1 });';
$respuesta_52='} catch (error) { console.error(error); }';
$respuesta_53='};';
$respuesta_54='const handleEditClick = (game) => {';
$respuesta_55='setEditingId(game.id);';
$respuesta_56='setNewGame({';
$respuesta_57='name: game.name, description: game.description,';
$respuesta_58='minPlayers: game.minPlayers, maxPlayers: game.maxPlayers,';
$respuesta_59='category: game.category, userId: game.userId,';
$respuesta_60='});';
$respuesta_61='};';
$respuesta_62='return (';
$respuesta_63='<Box sx={{ minHeight: "100vh", display: "flex", flexDirection: "column", alignItems: "center", gap: 2, p: 4 }}>';
$respuesta_64='<Typography variant="h3">Dashboard Games</Typography>';
$respuesta_65='{/* FORM */}';
$respuesta_66='<Box sx={{ width: "400px", display: "flex", flexDirection: "column", gap: 2 }}>';
$respuesta_67='<TextField label="Name" value={newGame.name}';
$respuesta_68='onChange={(e) => setNewGame({ ...newGame, name: e.target.value })} />';
$respuesta_69='<TextField label="Description" value={newGame.description}';
$respuesta_70='onChange={(e) => setNewGame({ ...newGame, description: e.target.value })} />';
$respuesta_71='<TextField label="Min Players" type="number" value={newGame.minPlayers}';
$respuesta_72='onChange={(e) => setNewGame({ ...newGame, minPlayers: e.target.value })} />';
$respuesta_73='<TextField label="Max Players" type="number" value={newGame.maxPlayers}';
$respuesta_74='onChange={(e) => setNewGame({ ...newGame, maxPlayers: e.target.value })} />';
$respuesta_75='<TextField label="Category" value={newGame.category}';
$respuesta_76='onChange={(e) => setNewGame({ ...newGame, category: e.target.value })} />';
$respuesta_77='{editingId ? (';
$respuesta_78='<Button variant="contained" color="warning" onClick={handleUpdateGame}>Update Game</Button>';
$respuesta_79=') : (';
$respuesta_80='<Button variant="contained" onClick={handleCreateGame}>Create Game</Button>';
$respuesta_81=')}';
$respuesta_82='</Box>';
$respuesta_83='{/* GAMES LIST */}';
$respuesta_84='<Box sx={{ width: "100%", display: "flex", flexDirection: "column", gap: 2, mt: 4 }}>';
$respuesta_85='{games.map((game) => (';
$respuesta_86='<Box key={game.id} sx={{ border: "1px solid gray", borderRadius: 2, p: 2 }}>';
$respuesta_87='<Typography variant="h5">{game.name}</Typography>';
$respuesta_88='<Typography>{game.description}</Typography>';
$respuesta_89='<Typography>Players: {game.minPlayers} - {game.maxPlayers}</Typography>';
$respuesta_90='<Typography>Category: {game.category}</Typography>';
$respuesta_91='<Typography>User: {game.username}</Typography>';
$respuesta_92='<Box sx={{ display: "flex", gap: 2, mt: 2 }}>';
$respuesta_93='<Button variant="contained" color="warning" onClick={() => handleEditClick(game)}>Edit</Button>';
$respuesta_94='<Button variant="contained" color="error" onClick={() => handleDeleteGame(game.id)}>Delete</Button>';
$respuesta_95='</Box>';
$respuesta_96='</Box>';
$respuesta_97='))}';
$respuesta_98='</Box>';
$respuesta_99='</Box>';
$respuesta_100=');';
$respuesta_101='}';
        
        // Marcar todas como correctas
    for ($i = 1; $i <= 122; $i++) {
    ${"verificar_$i"} = "correcto";
    }

    } else {
      $respuesta_1 = isset($_POST['respuesta_1']) ? $_POST['respuesta_1'] : '';
    if ($respuesta_1 === 'import {') {  
        $verificar_1 = "correcto";
    } elseif ($respuesta_1 === '') {
        $verificar_1 = '';
    } else {
        $verificar_1 = "incorrecto";
    }

    $respuesta_2 = isset($_POST['respuesta_2']) ? $_POST['respuesta_2'] : '';
    if ($respuesta_2 === 'Box, Typography, Button, TextField,') {  
        $verificar_2 = "correcto";
    } elseif ($respuesta_2 === '') {
        $verificar_2 = '';
    } else {
        $verificar_2 = "incorrecto";
    }

    $respuesta_3 = isset($_POST['respuesta_3']) ? $_POST['respuesta_3'] : '';
    if ($respuesta_3 === '} from "@mui/material";') {  
        $verificar_3 = "correcto";
    } elseif ($respuesta_3 === '') {
        $verificar_3 = '';
    } else {
        $verificar_3 = "incorrecto";
    }

    $respuesta_4 = isset($_POST['respuesta_4']) ? $_POST['respuesta_4'] : '';
    if ($respuesta_4 === 'import { useEffect, useState } from "react";') {  
        $verificar_4 = "correcto";
    } elseif ($respuesta_4 === '') {
        $verificar_4 = '';
    } else {
        $verificar_4 = "incorrecto";
    }

    $respuesta_5 = isset($_POST['respuesta_5']) ? $_POST['respuesta_5'] : '';
    if ($respuesta_5 === 'import {') {  
        $verificar_5 = "correcto";
    } elseif ($respuesta_5 === '') {
        $verificar_5 = '';
    } else {
        $verificar_5 = "incorrecto";
    }

    $respuesta_6 = isset($_POST['respuesta_6']) ? $_POST['respuesta_6'] : '';
    if ($respuesta_6 === 'getAllGames, createGame, deleteGame, updateGame,') {  
        $verificar_6 = "correcto";
    } elseif ($respuesta_6 === '') {
        $verificar_6 = '';
    } else {
        $verificar_6 = "incorrecto";
    }

    $respuesta_7 = isset($_POST['respuesta_7']) ? $_POST['respuesta_7'] : '';
    if ($respuesta_7 === '} from "./services/games.service";') {  
        $verificar_7 = "correcto";
    } elseif ($respuesta_7 === '') {
        $verificar_7 = '';
    } else {
        $verificar_7 = "incorrecto";
    }

    $respuesta_8 = isset($_POST['respuesta_8']) ? $_POST['respuesta_8'] : '';
    if ($respuesta_8 === 'export default function Dashboard() {') {  
        $verificar_8 = "correcto";
    } elseif ($respuesta_8 === '') {
        $verificar_8 = '';
    } else {
        $verificar_8 = "incorrecto";
    }

    $respuesta_9 = isset($_POST['respuesta_9']) ? $_POST['respuesta_9'] : '';
    if ($respuesta_9 === 'const [games, setGames] = useState([]);') {  
        $verificar_9 = "correcto";
    } elseif ($respuesta_9 === '') {
        $verificar_9 = '';
    } else {
        $verificar_9 = "incorrecto";
    }

    $respuesta_10 = isset($_POST['respuesta_10']) ? $_POST['respuesta_10'] : '';
    if ($respuesta_10 === 'const [newGame, setNewGame] = useState({') {  
        $verificar_10 = "correcto";
    } elseif ($respuesta_10 === '') {
        $verificar_10 = '';
    } else {
        $verificar_10 = "incorrecto";
    }

    $respuesta_11 = isset($_POST['respuesta_11']) ? $_POST['respuesta_11'] : '';
    if ($respuesta_11 === 'name: "", description: "", minPlayers: "", maxPlayers: "", category: "", userId: 1,') {  
        $verificar_11 = "correcto";
    } elseif ($respuesta_11 === '') {
        $verificar_11 = '';
    } else {
        $verificar_11 = "incorrecto";
    }

    $respuesta_12 = isset($_POST['respuesta_12']) ? $_POST['respuesta_12'] : '';
    if ($respuesta_12 === '});') {  
        $verificar_12 = "correcto";
    } elseif ($respuesta_12 === '') {
        $verificar_12 = '';
    } else {
        $verificar_12 = "incorrecto";
    }

    $respuesta_13 = isset($_POST['respuesta_13']) ? $_POST['respuesta_13'] : '';
    if ($respuesta_13 === 'const [editingId, setEditingId] = useState(null);') {  
        $verificar_13 = "correcto";
    } elseif ($respuesta_13 === '') {
        $verificar_13 = '';
    } else {
        $verificar_13 = "incorrecto";
    }

    $respuesta_14 = isset($_POST['respuesta_14']) ? $_POST['respuesta_14'] : '';
    if ($respuesta_14 === 'useEffect(() => {') {  
        $verificar_14 = "correcto";
    } elseif ($respuesta_14 === '') {
        $verificar_14 = '';
    } else {
        $verificar_14 = "incorrecto";
    }

    $respuesta_15 = isset($_POST['respuesta_15']) ? $_POST['respuesta_15'] : '';
    if ($respuesta_15 === 'const fetchData = async () => {') {  
        $verificar_15 = "correcto";
    } elseif ($respuesta_15 === '') {
        $verificar_15 = '';
    } else {
        $verificar_15 = "incorrecto";
    }

    $respuesta_16 = isset($_POST['respuesta_16']) ? $_POST['respuesta_16'] : '';
    if ($respuesta_16 === 'try {') {  
        $verificar_16 = "correcto";
    } elseif ($respuesta_16 === '') {
        $verificar_16 = '';
    } else {
        $verificar_16 = "incorrecto";
    }

    $respuesta_17 = isset($_POST['respuesta_17']) ? $_POST['respuesta_17'] : '';
    if ($respuesta_17 === 'const data = await getAllGames();') {  
        $verificar_17 = "correcto";
    } elseif ($respuesta_17 === '') {
        $verificar_17 = '';
    } else {
        $verificar_17 = "incorrecto";
    }

    $respuesta_18 = isset($_POST['respuesta_18']) ? $_POST['respuesta_18'] : '';
    if ($respuesta_18 === 'setGames(data);') {  
        $verificar_18 = "correcto";
    } elseif ($respuesta_18 === '') {
        $verificar_18 = '';
    } else {
        $verificar_18 = "incorrecto";
    }

    $respuesta_19 = isset($_POST['respuesta_19']) ? $_POST['respuesta_19'] : '';
    if ($respuesta_19 === '} catch (error) {') {  
        $verificar_19 = "correcto";
    } elseif ($respuesta_19 === '') {
        $verificar_19 = '';
    } else {
        $verificar_19 = "incorrecto";
    }

    $respuesta_20 = isset($_POST['respuesta_20']) ? $_POST['respuesta_20'] : '';
    if ($respuesta_20 === 'console.error(error);') {  
        $verificar_20 = "correcto";
    } elseif ($respuesta_20 === '') {
        $verificar_20 = '';
    } else {
        $verificar_20 = "incorrecto";
    }

    $respuesta_21 = isset($_POST['respuesta_21']) ? $_POST['respuesta_21'] : '';
    if ($respuesta_21 === '}') {  
        $verificar_21 = "correcto";
    } elseif ($respuesta_21 === '') {
        $verificar_21 = '';
    } else {
        $verificar_21 = "incorrecto";
    }

    $respuesta_22 = isset($_POST['respuesta_22']) ? $_POST['respuesta_22'] : '';
    if ($respuesta_22 === '};') {  
        $verificar_22 = "correcto";
    } elseif ($respuesta_22 === '') {
        $verificar_22 = '';
    } else {
        $verificar_22 = "incorrecto";
    }

    $respuesta_23 = isset($_POST['respuesta_23']) ? $_POST['respuesta_23'] : '';
    if ($respuesta_23 === 'fetchData();') {  
        $verificar_23 = "correcto";
    } elseif ($respuesta_23 === '') {
        $verificar_23 = '';
    } else {
        $verificar_23 = "incorrecto";
    }

    $respuesta_24 = isset($_POST['respuesta_24']) ? $_POST['respuesta_24'] : '';
    if ($respuesta_24 === '}, []);') {  
        $verificar_24 = "correcto";
    } elseif ($respuesta_24 === '') {
        $verificar_24 = '';
    } else {
        $verificar_24 = "incorrecto";
    }

    $respuesta_25 = isset($_POST['respuesta_25']) ? $_POST['respuesta_25'] : '';
    if ($respuesta_25 === 'const handleCreateGame = async () => {') {  
        $verificar_25 = "correcto";
    } elseif ($respuesta_25 === '') {
        $verificar_25 = '';
    } else {
        $verificar_25 = "incorrecto";
    }

    $respuesta_26 = isset($_POST['respuesta_26']) ? $_POST['respuesta_26'] : '';
    if ($respuesta_26 === 'try {') {  
        $verificar_26 = "correcto";
    } elseif ($respuesta_26 === '') {
        $verificar_26 = '';
    } else {
        $verificar_26 = "incorrecto";
    }

    $respuesta_27 = isset($_POST['respuesta_27']) ? $_POST['respuesta_27'] : '';
    if ($respuesta_27 === 'const createdGame = await createGame({') {  
        $verificar_27 = "correcto";
    } elseif ($respuesta_27 === '') {
        $verificar_27 = '';
    } else {
        $verificar_27 = "incorrecto";
    }

    $respuesta_28 = isset($_POST['respuesta_28']) ? $_POST['respuesta_28'] : '';
    if ($respuesta_28 === '...newGame,') {  
        $verificar_28 = "correcto";
    } elseif ($respuesta_28 === '') {
        $verificar_28 = '';
    } else {
        $verificar_28 = "incorrecto";
    }

    $respuesta_29 = isset($_POST['respuesta_29']) ? $_POST['respuesta_29'] : '';
    if ($respuesta_29 === 'minPlayers: Number(newGame.minPlayers),') {  
        $verificar_29 = "correcto";
    } elseif ($respuesta_29 === '') {
        $verificar_29 = '';
    } else {
        $verificar_29 = "incorrecto";
    }

    $respuesta_30 = isset($_POST['respuesta_30']) ? $_POST['respuesta_30'] : '';
    if ($respuesta_30 === 'maxPlayers: Number(newGame.maxPlayers),') {  
        $verificar_30 = "correcto";
    } elseif ($respuesta_30 === '') {
        $verificar_30 = '';
    } else {
        $verificar_30 = "incorrecto";
    }

    $respuesta_31 = isset($_POST['respuesta_31']) ? $_POST['respuesta_31'] : '';
    if ($respuesta_31 === '});') {  
        $verificar_31 = "correcto";
    } elseif ($respuesta_31 === '') {
        $verificar_31 = '';
    } else {
        $verificar_31 = "incorrecto";
    }

    $respuesta_32 = isset($_POST['respuesta_32']) ? $_POST['respuesta_32'] : '';
    if ($respuesta_32 === 'setGames((prev) => [...prev, createdGame]);') {  
        $verificar_32 = "correcto";
    } elseif ($respuesta_32 === '') {
        $verificar_32 = '';
    } else {
        $verificar_32 = "incorrecto";
    }

    $respuesta_33 = isset($_POST['respuesta_33']) ? $_POST['respuesta_33'] : '';
    if ($respuesta_33 === 'setNewGame({ name: "", description: "", minPlayers: "", maxPlayers: "", category: "", userId: 1 });') {  
        $verificar_33 = "correcto";
    } elseif ($respuesta_33 === '') {
        $verificar_33 = '';
    } else {
        $verificar_33 = "incorrecto";
    }

    $respuesta_34 = isset($_POST['respuesta_34']) ? $_POST['respuesta_34'] : '';
    if ($respuesta_34 === '} catch (error) { console.error(error); }') {  
        $verificar_34 = "correcto";
    } elseif ($respuesta_34 === '') {
        $verificar_34 = '';
    } else {
        $verificar_34 = "incorrecto";
    }

    $respuesta_35 = isset($_POST['respuesta_35']) ? $_POST['respuesta_35'] : '';
    if ($respuesta_35 === '};') {  
        $verificar_35 = "correcto";
    } elseif ($respuesta_35 === '') {
        $verificar_35 = '';
    } else {
        $verificar_35 = "incorrecto";
    }

    $respuesta_36 = isset($_POST['respuesta_36']) ? $_POST['respuesta_36'] : '';
    if ($respuesta_36 === 'const handleDeleteGame = async (id) => {') {  
        $verificar_36 = "correcto";
    } elseif ($respuesta_36 === '') {
        $verificar_36 = '';
    } else {
        $verificar_36 = "incorrecto";
    }

    $respuesta_37 = isset($_POST['respuesta_37']) ? $_POST['respuesta_37'] : '';
    if ($respuesta_37 === 'try {') {  
        $verificar_37 = "correcto";
    } elseif ($respuesta_37 === '') {
        $verificar_37 = '';
    } else {
        $verificar_37 = "incorrecto";
    }

    $respuesta_38 = isset($_POST['respuesta_38']) ? $_POST['respuesta_38'] : '';
    if ($respuesta_38 === 'await deleteGame(id);') {  
        $verificar_38 = "correcto";
    } elseif ($respuesta_38 === '') {
        $verificar_38 = '';
    } else {
        $verificar_38 = "incorrecto";
    }

    $respuesta_39 = isset($_POST['respuesta_39']) ? $_POST['respuesta_39'] : '';
    if ($respuesta_39 === 'setGames((prev) => prev.filter((game) => game.id !== id));') {  
        $verificar_39 = "correcto";
    } elseif ($respuesta_39 === '') {
        $verificar_39 = '';
    } else {
        $verificar_39 = "incorrecto";
    }

    $respuesta_40 = isset($_POST['respuesta_40']) ? $_POST['respuesta_40'] : '';
    if ($respuesta_40 === '} catch (error) { console.error(error); }') {  
        $verificar_40 = "correcto";
    } elseif ($respuesta_40 === '') {
        $verificar_40 = '';
    } else {
        $verificar_40 = "incorrecto";
    }

    $respuesta_41 = isset($_POST['respuesta_41']) ? $_POST['respuesta_41'] : '';
    if ($respuesta_41 === '};') {  
        $verificar_41 = "correcto";
    } elseif ($respuesta_41 === '') {
        $verificar_41 = '';
    } else {
        $verificar_41 = "incorrecto";
    }

    $respuesta_42 = isset($_POST['respuesta_42']) ? $_POST['respuesta_42'] : '';
    if ($respuesta_42 === 'const handleUpdateGame = async () => {') {  
        $verificar_42 = "correcto";
    } elseif ($respuesta_42 === '') {
        $verificar_42 = '';
    } else {
        $verificar_42 = "incorrecto";
    }

    $respuesta_43 = isset($_POST['respuesta_43']) ? $_POST['respuesta_43'] : '';
    if ($respuesta_43 === 'try {') {  
        $verificar_43 = "correcto";
    } elseif ($respuesta_43 === '') {
        $verificar_43 = '';
    } else {
        $verificar_43 = "incorrecto";
    }

    $respuesta_44 = isset($_POST['respuesta_44']) ? $_POST['respuesta_44'] : '';
    if ($respuesta_44 === 'const updatedGame = await updateGame(editingId, {') {  
        $verificar_44 = "correcto";
    } elseif ($respuesta_44 === '') {
        $verificar_44 = '';
    } else {
        $verificar_44 = "incorrecto";
    }

    $respuesta_45 = isset($_POST['respuesta_45']) ? $_POST['respuesta_45'] : '';
    if ($respuesta_45 === '...newGame,') {  
        $verificar_45 = "correcto";
    } elseif ($respuesta_45 === '') {
        $verificar_45 = '';
    } else {
        $verificar_45 = "incorrecto";
    }

    $respuesta_46 = isset($_POST['respuesta_46']) ? $_POST['respuesta_46'] : '';
    if ($respuesta_46 === 'minPlayers: Number(newGame.minPlayers),') {  
        $verificar_46 = "correcto";
    } elseif ($respuesta_46 === '') {
        $verificar_46 = '';
    } else {
        $verificar_46 = "incorrecto";
    }

    $respuesta_47 = isset($_POST['respuesta_47']) ? $_POST['respuesta_47'] : '';
    if ($respuesta_47 === 'maxPlayers: Number(newGame.maxPlayers),') {  
        $verificar_47 = "correcto";
    } elseif ($respuesta_47 === '') {
        $verificar_47 = '';
    } else {
        $verificar_47 = "incorrecto";
    }

    $respuesta_48 = isset($_POST['respuesta_48']) ? $_POST['respuesta_48'] : '';
    if ($respuesta_48 === '});') {  
        $verificar_48 = "correcto";
    } elseif ($respuesta_48 === '') {
        $verificar_48 = '';
    } else {
        $verificar_48 = "incorrecto";
    }

    $respuesta_49 = isset($_POST['respuesta_49']) ? $_POST['respuesta_49'] : '';
    if ($respuesta_49 === 'setGames((prev) => prev.map((game) => game.id === editingId ? updatedGame : game));') {  
        $verificar_49 = "correcto";
    } elseif ($respuesta_49 === '') {
        $verificar_49 = '';
    } else {
        $verificar_49 = "incorrecto";
    }

    $respuesta_50 = isset($_POST['respuesta_50']) ? $_POST['respuesta_50'] : '';
    if ($respuesta_50 === 'setEditingId(null);') {  
        $verificar_50 = "correcto";
    } elseif ($respuesta_50 === '') {
        $verificar_50 = '';
    } else {
        $verificar_50 = "incorrecto";
    }

    $respuesta_51 = isset($_POST['respuesta_51']) ? $_POST['respuesta_51'] : '';
    if ($respuesta_51 === 'setNewGame({ name: "", description: "", minPlayers: "", maxPlayers: "", category: "", userId: 1 });') {  
        $verificar_51 = "correcto";
    } elseif ($respuesta_51 === '') {
        $verificar_51 = '';
    } else {
        $verificar_51 = "incorrecto";
    }

    $respuesta_52 = isset($_POST['respuesta_52']) ? $_POST['respuesta_52'] : '';
    if ($respuesta_52 === '} catch (error) { console.error(error); }') {  
        $verificar_52 = "correcto";
    } elseif ($respuesta_52 === '') {
        $verificar_52 = '';
    } else {
        $verificar_52 = "incorrecto";
    }

    $respuesta_53 = isset($_POST['respuesta_53']) ? $_POST['respuesta_53'] : '';
    if ($respuesta_53 === '};') {  
        $verificar_53 = "correcto";
    } elseif ($respuesta_53 === '') {
        $verificar_53 = '';
    } else {
        $verificar_53 = "incorrecto";
    }

    $respuesta_54 = isset($_POST['respuesta_54']) ? $_POST['respuesta_54'] : '';
    if ($respuesta_54 === 'const handleEditClick = (game) => {') {  
        $verificar_54 = "correcto";
    } elseif ($respuesta_54 === '') {
        $verificar_54 = '';
    } else {
        $verificar_54 = "incorrecto";
    }

    $respuesta_55 = isset($_POST['respuesta_55']) ? $_POST['respuesta_55'] : '';
    if ($respuesta_55 === 'setEditingId(game.id);') {  
        $verificar_55 = "correcto";
    } elseif ($respuesta_55 === '') {
        $verificar_55 = '';
    } else {
        $verificar_55 = "incorrecto";
    }

    $respuesta_56 = isset($_POST['respuesta_56']) ? $_POST['respuesta_56'] : '';
    if ($respuesta_56 === 'setNewGame({') {  
        $verificar_56 = "correcto";
    } elseif ($respuesta_56 === '') {
        $verificar_56 = '';
    } else {
        $verificar_56 = "incorrecto";
    }

    $respuesta_57 = isset($_POST['respuesta_57']) ? $_POST['respuesta_57'] : '';
    if ($respuesta_57 === 'name: game.name, description: game.description,') {  
        $verificar_57 = "correcto";
    } elseif ($respuesta_57 === '') {
        $verificar_57 = '';
    } else {
        $verificar_57 = "incorrecto";
    }

    $respuesta_58 = isset($_POST['respuesta_58']) ? $_POST['respuesta_58'] : '';
    if ($respuesta_58 === 'minPlayers: game.minPlayers, maxPlayers: game.maxPlayers,') {  
        $verificar_58 = "correcto";
    } elseif ($respuesta_58 === '') {
        $verificar_58 = '';
    } else {
        $verificar_58 = "incorrecto";
    }

    $respuesta_59 = isset($_POST['respuesta_59']) ? $_POST['respuesta_59'] : '';
    if ($respuesta_59 === 'category: game.category, userId: game.userId,') {  
        $verificar_59 = "correcto";
    } elseif ($respuesta_59 === '') {
        $verificar_59 = '';
    } else {
        $verificar_59 = "incorrecto";
    }

    $respuesta_60 = isset($_POST['respuesta_60']) ? $_POST['respuesta_60'] : '';
    if ($respuesta_60 === '});') {  
        $verificar_60 = "correcto";
    } elseif ($respuesta_60 === '') {
        $verificar_60 = '';
    } else {
        $verificar_60 = "incorrecto";
    }

    $respuesta_61 = isset($_POST['respuesta_61']) ? $_POST['respuesta_61'] : '';
    if ($respuesta_61 === '};') {  
        $verificar_61 = "correcto";
    } elseif ($respuesta_61 === '') {
        $verificar_61 = '';
    } else {
        $verificar_61 = "incorrecto";
    }

    $respuesta_62 = isset($_POST['respuesta_62']) ? $_POST['respuesta_62'] : '';
    if ($respuesta_62 === 'return (') {  
        $verificar_62 = "correcto";
    } elseif ($respuesta_62 === '') {
        $verificar_62 = '';
    } else {
        $verificar_62 = "incorrecto";
    }

    $respuesta_63 = isset($_POST['respuesta_63']) ? $_POST['respuesta_63'] : '';
    if ($respuesta_63 === '<Box sx={{ minHeight: "100vh", display: "flex", flexDirection: "column", alignItems: "center", gap: 2, p: 4 }}>') {  
        $verificar_63 = "correcto";
    } elseif ($respuesta_63 === '') {
        $verificar_63 = '';
    } else {
        $verificar_63 = "incorrecto";
    }

    $respuesta_64 = isset($_POST['respuesta_64']) ? $_POST['respuesta_64'] : '';
    if ($respuesta_64 === '<Typography variant="h3">Dashboard Games</Typography>') {  
        $verificar_64 = "correcto";
    } elseif ($respuesta_64 === '') {
        $verificar_64 = '';
    } else {
        $verificar_64 = "incorrecto";
    }

    $respuesta_65 = isset($_POST['respuesta_65']) ? $_POST['respuesta_65'] : '';
    if ($respuesta_65 === '{/* FORM */}') {  
        $verificar_65 = "correcto";
    } elseif ($respuesta_65 === '') {
        $verificar_65 = '';
    } else {
        $verificar_65 = "incorrecto";
    }

    $respuesta_66 = isset($_POST['respuesta_66']) ? $_POST['respuesta_66'] : '';
    if ($respuesta_66 === '<Box sx={{ width: "400px", display: "flex", flexDirection: "column", gap: 2 }}>') {  
        $verificar_66 = "correcto";
    } elseif ($respuesta_66 === '') {
        $verificar_66 = '';
    } else {
        $verificar_66 = "incorrecto";
    }

    $respuesta_67 = isset($_POST['respuesta_67']) ? $_POST['respuesta_67'] : '';
    if ($respuesta_67 === '<TextField label="Name" value={newGame.name}') {  
        $verificar_67 = "correcto";
    } elseif ($respuesta_67 === '') {
        $verificar_67 = '';
    } else {
        $verificar_67 = "incorrecto";
    }

    $respuesta_68 = isset($_POST['respuesta_68']) ? $_POST['respuesta_68'] : '';
    if ($respuesta_68 === 'onChange={(e) => setNewGame({ ...newGame, name: e.target.value })} />') {  
        $verificar_68 = "correcto";
    } elseif ($respuesta_68 === '') {
        $verificar_68 = '';
    } else {
        $verificar_68 = "incorrecto";
    }

    $respuesta_69 = isset($_POST['respuesta_69']) ? $_POST['respuesta_69'] : '';
    if ($respuesta_69 === '<TextField label="Description" value={newGame.description}') {  
        $verificar_69 = "correcto";
    } elseif ($respuesta_69 === '') {
        $verificar_69 = '';
    } else {
        $verificar_69 = "incorrecto";
    }

    $respuesta_70 = isset($_POST['respuesta_70']) ? $_POST['respuesta_70'] : '';
    if ($respuesta_70 === 'onChange={(e) => setNewGame({ ...newGame, description: e.target.value })} />') {  
        $verificar_70 = "correcto";
    } elseif ($respuesta_70 === '') {
        $verificar_70 = '';
    } else {
        $verificar_70 = "incorrecto";
    }

    $respuesta_71 = isset($_POST['respuesta_71']) ? $_POST['respuesta_71'] : '';
    if ($respuesta_71 === '<TextField label="Min Players" type="number" value={newGame.minPlayers}') {  
        $verificar_71 = "correcto";
    } elseif ($respuesta_71 === '') {
        $verificar_71 = '';
    } else {
        $verificar_71 = "incorrecto";
    }

    $respuesta_72 = isset($_POST['respuesta_72']) ? $_POST['respuesta_72'] : '';
    if ($respuesta_72 === 'onChange={(e) => setNewGame({ ...newGame, minPlayers: e.target.value })} />') {  
        $verificar_72 = "correcto";
    } elseif ($respuesta_72 === '') {
        $verificar_72 = '';
    } else {
        $verificar_72 = "incorrecto";
    }

    $respuesta_73 = isset($_POST['respuesta_73']) ? $_POST['respuesta_73'] : '';
    if ($respuesta_73 === '<TextField label="Max Players" type="number" value={newGame.maxPlayers}') {  
        $verificar_73 = "correcto";
    } elseif ($respuesta_73 === '') {
        $verificar_73 = '';
    } else {
        $verificar_73 = "incorrecto";
    }

    $respuesta_74 = isset($_POST['respuesta_74']) ? $_POST['respuesta_74'] : '';
    if ($respuesta_74 === 'onChange={(e) => setNewGame({ ...newGame, maxPlayers: e.target.value })} />') {  
        $verificar_74 = "correcto";
    } elseif ($respuesta_74 === '') {
        $verificar_74 = '';
    } else {
        $verificar_74 = "incorrecto";
    }

    $respuesta_75 = isset($_POST['respuesta_75']) ? $_POST['respuesta_75'] : '';
    if ($respuesta_75 === '<TextField label="Category" value={newGame.category}') {  
        $verificar_75 = "correcto";
    } elseif ($respuesta_75 === '') {
        $verificar_75 = '';
    } else {
        $verificar_75 = "incorrecto";
    }

    $respuesta_76 = isset($_POST['respuesta_76']) ? $_POST['respuesta_76'] : '';
    if ($respuesta_76 === 'onChange={(e) => setNewGame({ ...newGame, category: e.target.value })} />') {  
        $verificar_76 = "correcto";
    } elseif ($respuesta_76 === '') {
        $verificar_76 = '';
    } else {
        $verificar_76 = "incorrecto";
    }

    $respuesta_77 = isset($_POST['respuesta_77']) ? $_POST['respuesta_77'] : '';
    if ($respuesta_77 === '{editingId ? (') {  
        $verificar_77 = "correcto";
    } elseif ($respuesta_77 === '') {
        $verificar_77 = '';
    } else {
        $verificar_77 = "incorrecto";
    }

    $respuesta_78 = isset($_POST['respuesta_78']) ? $_POST['respuesta_78'] : '';
    if ($respuesta_78 === '<Button variant="contained" color="warning" onClick={handleUpdateGame}>Update Game</Button>') {  
        $verificar_78 = "correcto";
    } elseif ($respuesta_78 === '') {
        $verificar_78 = '';
    } else {
        $verificar_78 = "incorrecto";
    }

    $respuesta_79 = isset($_POST['respuesta_79']) ? $_POST['respuesta_79'] : '';
    if ($respuesta_79 === ') : (') {  
        $verificar_79 = "correcto";
    } elseif ($respuesta_79 === '') {
        $verificar_79 = '';
    } else {
        $verificar_79 = "incorrecto";
    }

    $respuesta_80 = isset($_POST['respuesta_80']) ? $_POST['respuesta_80'] : '';
    if ($respuesta_80 === '<Button variant="contained" onClick={handleCreateGame}>Create Game</Button>') {  
        $verificar_80 = "correcto";
    } elseif ($respuesta_80 === '') {
        $verificar_80 = '';
    } else {
        $verificar_80 = "incorrecto";
    }

    $respuesta_81 = isset($_POST['respuesta_81']) ? $_POST['respuesta_81'] : '';
    if ($respuesta_81 === ')}') {  
        $verificar_81 = "correcto";
    } elseif ($respuesta_81 === '') {
        $verificar_81 = '';
    } else {
        $verificar_81 = "incorrecto";
    }

    $respuesta_82 = isset($_POST['respuesta_82']) ? $_POST['respuesta_82'] : '';
    if ($respuesta_82 === '</Box>') {  
        $verificar_82 = "correcto";
    } elseif ($respuesta_82 === '') {
        $verificar_82 = '';
    } else {
        $verificar_82 = "incorrecto";
    }

    $respuesta_83 = isset($_POST['respuesta_83']) ? $_POST['respuesta_83'] : '';
    if ($respuesta_83 === '{/* GAMES LIST */}') {  
        $verificar_83 = "correcto";
    } elseif ($respuesta_83 === '') {
        $verificar_83 = '';
    } else {
        $verificar_83 = "incorrecto";
    }

    $respuesta_84 = isset($_POST['respuesta_84']) ? $_POST['respuesta_84'] : '';
    if ($respuesta_84 === '<Box sx={{ width: "100%", display: "flex", flexDirection: "column", gap: 2, mt: 4 }}>') {  
        $verificar_84 = "correcto";
    } elseif ($respuesta_84 === '') {
        $verificar_84 = '';
    } else {
        $verificar_84 = "incorrecto";
    }

    $respuesta_85 = isset($_POST['respuesta_85']) ? $_POST['respuesta_85'] : '';
    if ($respuesta_85 === '{games.map((game) => (') {  
        $verificar_85 = "correcto";
    } elseif ($respuesta_85 === '') {
        $verificar_85 = '';
    } else {
        $verificar_85 = "incorrecto";
    }

    $respuesta_86 = isset($_POST['respuesta_86']) ? $_POST['respuesta_86'] : '';
    if ($respuesta_86 === '<Box key={game.id} sx={{ border: "1px solid gray", borderRadius: 2, p: 2 }}>') {  
        $verificar_86 = "correcto";
    } elseif ($respuesta_86 === '') {
        $verificar_86 = '';
    } else {
        $verificar_86 = "incorrecto";
    }

    $respuesta_87 = isset($_POST['respuesta_87']) ? $_POST['respuesta_87'] : '';
    if ($respuesta_87 === '<Typography variant="h5">{game.name}</Typography>') {  
        $verificar_87 = "correcto";
    } elseif ($respuesta_87 === '') {
        $verificar_87 = '';
    } else {
        $verificar_87 = "incorrecto";
    }

    $respuesta_88 = isset($_POST['respuesta_88']) ? $_POST['respuesta_88'] : '';
    if ($respuesta_88 === '<Typography>{game.description}</Typography>') {  
        $verificar_88 = "correcto";
    } elseif ($respuesta_88 === '') {
        $verificar_88 = '';
    } else {
        $verificar_88 = "incorrecto";
    }

    $respuesta_89 = isset($_POST['respuesta_89']) ? $_POST['respuesta_89'] : '';
    if ($respuesta_89 === '<Typography>Players: {game.minPlayers} - {game.maxPlayers}</Typography>') {  
        $verificar_89 = "correcto";
    } elseif ($respuesta_89 === '') {
        $verificar_89 = '';
    } else {
        $verificar_89 = "incorrecto";
    }

    $respuesta_90 = isset($_POST['respuesta_90']) ? $_POST['respuesta_90'] : '';
    if ($respuesta_90 === '<Typography>Category: {game.category}</Typography>') {  
        $verificar_90 = "correcto";
    } elseif ($respuesta_90 === '') {
        $verificar_90 = '';
    } else {
        $verificar_90 = "incorrecto";
    }

    $respuesta_91 = isset($_POST['respuesta_91']) ? $_POST['respuesta_91'] : '';
    if ($respuesta_91 === '<Typography>User: {game.username}</Typography>') {  
        $verificar_91 = "correcto";
    } elseif ($respuesta_91 === '') {
        $verificar_91 = '';
    } else {
        $verificar_91 = "incorrecto";
    }

    $respuesta_92 = isset($_POST['respuesta_92']) ? $_POST['respuesta_92'] : '';
    if ($respuesta_92 === '<Box sx={{ display: "flex", gap: 2, mt: 2 }}>') {  
        $verificar_92 = "correcto";
    } elseif ($respuesta_92 === '') {
        $verificar_92 = '';
    } else {
        $verificar_92 = "incorrecto";
    }

    $respuesta_93 = isset($_POST['respuesta_93']) ? $_POST['respuesta_93'] : '';
    if ($respuesta_93 === '<Button variant="contained" color="warning" onClick={() => handleEditClick(game)}>Edit</Button>') {  
        $verificar_93 = "correcto";
    } elseif ($respuesta_93 === '') {
        $verificar_93 = '';
    } else {
        $verificar_93 = "incorrecto";
    }

    $respuesta_94 = isset($_POST['respuesta_94']) ? $_POST['respuesta_94'] : '';
    if ($respuesta_94 === '<Button variant="contained" color="error" onClick={() => handleDeleteGame(game.id)}>Delete</Button>') {  
        $verificar_94 = "correcto";
    } elseif ($respuesta_94 === '') {
        $verificar_94 = '';
    } else {
        $verificar_94 = "incorrecto";
    }

    $respuesta_95 = isset($_POST['respuesta_95']) ? $_POST['respuesta_95'] : '';
    if ($respuesta_95 === '</Box>') {  
        $verificar_95 = "correcto";
    } elseif ($respuesta_95 === '') {
        $verificar_95 = '';
    } else {
        $verificar_95 = "incorrecto";
    }

    $respuesta_96 = isset($_POST['respuesta_96']) ? $_POST['respuesta_96'] : '';
    if ($respuesta_96 === '</Box>') {  
        $verificar_96 = "correcto";
    } elseif ($respuesta_96 === '') {
        $verificar_96 = '';
    } else {
        $verificar_96 = "incorrecto";
    }

    $respuesta_97 = isset($_POST['respuesta_97']) ? $_POST['respuesta_97'] : '';
    if ($respuesta_97 === '))}') {  
        $verificar_97 = "correcto";
    } elseif ($respuesta_97 === '') {
        $verificar_97 = '';
    } else {
        $verificar_97 = "incorrecto";
    }

    $respuesta_98 = isset($_POST['respuesta_98']) ? $_POST['respuesta_98'] : '';
    if ($respuesta_98 === '</Box>') {  
        $verificar_98 = "correcto";
    } elseif ($respuesta_98 === '') {
        $verificar_98 = '';
    } else {
        $verificar_98 = "incorrecto";
    }

    $respuesta_99 = isset($_POST['respuesta_99']) ? $_POST['respuesta_99'] : '';
    if ($respuesta_99 === '</Box>') {  
        $verificar_99 = "correcto";
    } elseif ($respuesta_99 === '') {
        $verificar_99 = '';
    } else {
        $verificar_99 = "incorrecto";
    }

    $respuesta_100 = isset($_POST['respuesta_100']) ? $_POST['respuesta_100'] : '';
    if ($respuesta_100 === ');') {  
        $verificar_100 = "correcto";
    } elseif ($respuesta_100 === '') {
        $verificar_100 = '';
    } else {
        $verificar_100 = "incorrecto";
    }

    $respuesta_101 = isset($_POST['respuesta_101']) ? $_POST['respuesta_101'] : '';
    if ($respuesta_101 === '}') {  
        $verificar_101 = "correcto";
    } elseif ($respuesta_101 === '') {
        $verificar_101 = '';
    } else {
        $verificar_101 = "incorrecto";
    }

 $respuesta_102 = isset($_POST['respuesta_102']) ? $_POST['respuesta_102'] : '';
if ($respuesta_102 === '88') { 
    $verificar_102 = "correcto";
} elseif ($respuesta_102 === '') {
    $verificar_102 = '';
} else {
    $verificar_102 = "incorrecto";
}

 $respuesta_103 = isset($_POST['respuesta_103']) ? $_POST['respuesta_103'] : '';
if ($respuesta_103 === '110') { 
    $verificar_103 = "correcto";
} elseif ($respuesta_103 === '') {
    $verificar_103 = '';
} else {
    $verificar_103 = "incorrecto";
}

 $respuesta_104 = isset($_POST['respuesta_104']) ? $_POST['respuesta_104'] : '';
if ($respuesta_104 === '132') { 
    $verificar_104 = "correcto";
} elseif ($respuesta_104 === '') {
    $verificar_104 = '';
} else {
    $verificar_104 = "incorrecto";
}

 $respuesta_105 = isset($_POST['respuesta_105']) ? $_POST['respuesta_105'] : '';
if ($respuesta_105 === '154') { 
    $verificar_105 = "correcto";
} elseif ($respuesta_105 === '') {
    $verificar_105 = '';
} else {
    $verificar_105 = "incorrecto";
}

 $respuesta_106 = isset($_POST['respuesta_106']) ? $_POST['respuesta_106'] : '';
if ($respuesta_106 === '176') { 
    $verificar_106 = "correcto";
} elseif ($respuesta_106 === '') {
    $verificar_106 = '';
} else {
    $verificar_106 = "incorrecto";
}

 $respuesta_107 = isset($_POST['respuesta_107']) ? $_POST['respuesta_107'] : '';
if ($respuesta_107 === '198') { 
    $verificar_107 = "correcto";
} elseif ($respuesta_107 === '') {
    $verificar_107 = '';
} else {
    $verificar_107 = "incorrecto";
}

 $respuesta_108 = isset($_POST['respuesta_108']) ? $_POST['respuesta_108'] : '';
if ($respuesta_108 === '220') { 
    $verificar_108 = "correcto";
} elseif ($respuesta_108 === '') {
    $verificar_108 = '';
} else {
    $verificar_108 = "incorrecto";
}

 $respuesta_109 = isset($_POST['respuesta_109']) ? $_POST['respuesta_109'] : '';
if ($respuesta_109 === '242') { 
    $verificar_109 = "correcto";
} elseif ($respuesta_109 === '') {
    $verificar_109 = '';
} else {
    $verificar_109 = "incorrecto";
}

 $respuesta_110 = isset($_POST['respuesta_110']) ? $_POST['respuesta_110'] : '';
if ($respuesta_110 === '264') { 
    $verificar_110 = "correcto";
} elseif ($respuesta_110 === '') {
    $verificar_110 = '';
} else {
    $verificar_110 = "incorrecto";
}

// Tabla del 12
$respuesta_111 = isset($_POST['respuesta_111']) ? $_POST['respuesta_111'] : '';
if ($respuesta_111 === '24') {  
    $verificar_111 = "correcto";
} elseif ($respuesta_111 === '') {
    $verificar_111 = '';
} else {
    $verificar_111 = "incorrecto";
}

$respuesta_112 = isset($_POST['respuesta_112']) ? $_POST['respuesta_112'] : '';
if ($respuesta_112 === '36') {  
    $verificar_112 = "correcto";
} elseif ($respuesta_112 === '') {
    $verificar_112 = '';
} else {
    $verificar_112 = "incorrecto";
}

$respuesta_113 = isset($_POST['respuesta_113']) ? $_POST['respuesta_113'] : '';
if ($respuesta_113 === '48') {  
    $verificar_113 = "correcto";
} elseif ($respuesta_113 === '') {
    $verificar_113 = '';
} else {
    $verificar_113 = "incorrecto";
}

$respuesta_114 = isset($_POST['respuesta_114']) ? $_POST['respuesta_114'] : '';
if ($respuesta_114 === '60') {  
    $verificar_114 = "correcto";
} elseif ($respuesta_114 === '') {
    $verificar_114 = '';
} else {
    $verificar_114 = "incorrecto";
}

$respuesta_115 = isset($_POST['respuesta_115']) ? $_POST['respuesta_115'] : '';
if ($respuesta_115 === '72') {  
    $verificar_115 = "correcto";
} elseif ($respuesta_115 === '') {
    $verificar_115 = '';
} else {
    $verificar_115 = "incorrecto";
}

$respuesta_116 = isset($_POST['respuesta_116']) ? $_POST['respuesta_116'] : '';
if ($respuesta_116 === '84') {  
    $verificar_116 = "correcto";
} elseif ($respuesta_116 === '') {
    $verificar_116 = '';
} else {
    $verificar_116 = "incorrecto";
}

$respuesta_117 = isset($_POST['respuesta_117']) ? $_POST['respuesta_117'] : '';
if ($respuesta_117 === '96') {  
    $verificar_117 = "correcto";
} elseif ($respuesta_117 === '') {
    $verificar_117 = '';
} else {
    $verificar_117 = "incorrecto";
}

$respuesta_118 = isset($_POST['respuesta_118']) ? $_POST['respuesta_118'] : '';
if ($respuesta_118 === '108') {  
    $verificar_118 = "correcto";
} elseif ($respuesta_118 === '') {
    $verificar_118 = '';
} else {
    $verificar_118 = "incorrecto";
}

$respuesta_119 = isset($_POST['respuesta_119']) ? $_POST['respuesta_119'] : '';
if ($respuesta_119 === '120') {  
    $verificar_119 = "correcto";
} elseif ($respuesta_119 === '') {
    $verificar_119 = '';
} else {
    $verificar_119 = "incorrecto";
}

$respuesta_120 = isset($_POST['respuesta_120']) ? $_POST['respuesta_120'] : '';
if ($respuesta_120 === '132') {  
    $verificar_120 = "correcto";
} elseif ($respuesta_120 === '') {
    $verificar_120 = '';
} else {
    $verificar_120 = "incorrecto";
}

$respuesta_121 = isset($_POST['respuesta_121']) ? $_POST['respuesta_121'] : '';
if ($respuesta_121 === '144') {  
    $verificar_121 = "correcto";
} elseif ($respuesta_121 === '') {
    $verificar_121 = '';
} else {
    $verificar_121 = "incorrecto";
}
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas sobre simplificación de expresiones matemáticas</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../style_2_0.css">
    <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

<style>
 
    .seccion {
    /*width: 50%;*/    
    width: calc(50% - 7.5px);
    padding: 20px;
    box-sizing: border-box;
    height: 370vh;
    }

</style>
 
<script>
function handleSubmit(event) {
    event.preventDefault();

    const formData = new FormData(event.target);

    fetch(event.target.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(html => {
        document.body.innerHTML = html;

        // Asegúrate de que MathJax procese el nuevo contenido
        if (window.MathJax) {
            MathJax.typeset();
        }
        actualizarFormula();
        actualizarFormula2();
        actualizarFormula3();
        actualizarFormula4();
        actualizarFormula5();
        actualizarFormula6();
        actualizarFormula7();
        actualizarFormula8();
        actualizarFormula9();
        actualizarFormula10();
        actualizarFormula11();
        actualizarFormula12();
        actualizarFormula13();
        actualizarFormula14();
        actualizarFormula15();
        actualizarFormula16();
        actualizarFormula17();
        actualizarFormula18();
        actualizarFormula19();
        actualizarFormula20();
    })
    .catch(error => {
        console.error('Error al enviar el formulario:', error);
    });
}

function actualizarFormula() {
    var f = document.getElementById('respuesta_1').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula2() {
    var f = document.getElementById('respuesta_2').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula2').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula3() {
    var f = document.getElementById('respuesta_3').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula3').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula4() {
    var f = document.getElementById('respuesta_4').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula4').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula5() {
    var f = document.getElementById('respuesta_5').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula5').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula6() {
    var f = document.getElementById('respuesta_6').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula6').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula7() {
    var f = document.getElementById('respuesta_7').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula7').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula8() {
    var f = document.getElementById('respuesta_8').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula8').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula9() {
    var f = document.getElementById('respuesta_9').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula9').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula10() {
    var f = document.getElementById('respuesta_10').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula10').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula11() {
    var f = document.getElementById('respuesta_11').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula11').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula12() {
    var f = document.getElementById('respuesta_12').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula12').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula13() {
    var f = document.getElementById('respuesta_13').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula13').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula14() {
    var f = document.getElementById('respuesta_14').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula14').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula15() {
    var f = document.getElementById('respuesta_15').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula15').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula16() {
    var f = document.getElementById('respuesta_16').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula16').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula17() {
    var f = document.getElementById('respuesta_17').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula17').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula18() {
    var f = document.getElementById('respuesta_18').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula18').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula19() {
    var f = document.getElementById('respuesta_19').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula19').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function actualizarFormula20() {
    var f = document.getElementById('respuesta_20').value || "";
    var formula = ` \\ ${f} \\, `;
    document.getElementById('formula20').innerHTML = `$$ ${formula} $$`;
    if (window.MathJax) {
        MathJax.typeset();
    }
}

function mostrarMensaje() {
    document.getElementById("mensaje").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje")]);
}

function ocultarMensaje() {
    document.getElementById("mensaje").style.display = 'none';
}


function mostrarMensaje2() {
    document.getElementById("mensaje2").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje")]);
}

function ocultarMensaje2() {
    document.getElementById("mensaje2").style.display = 'none';
}



function mostrarMensaje3() {
    document.getElementById("mensaje3").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje3")]);
}

function ocultarMensaje3() {
    document.getElementById("mensaje3").style.display = 'none';
}

function mostrarMensaje4() {
    document.getElementById("mensaje4").style.display = 'block';
    // Asegúrate de que MathJax procese el nuevo contenido
    MathJax.typeset([document.getElementById("mensaje4")]);
}

function ocultarMensaje4() {
    document.getElementById("mensaje4").style.display = 'none';
}




</script>
    
</head>
<body>  

<form action="./segundo.php" method="POST" onsubmit="handleSubmit(event)" autocomplete="off"> 
<div class="form-container">

    
<div class="seccion izquierda"> 

 <p class="subtitulo">Completa los espacios en blanco con el código correcto</p>

    <h2>Imports</h2>
    <pre>
<input type="text" name="respuesta_1" id="respuesta_1" value="<?php echo htmlspecialchars($respuesta_1); ?>" size="10" class="<?php echo $verificar_1; ?>">
    <input type="text" name="respuesta_2" id="respuesta_2" value="<?php echo htmlspecialchars($respuesta_2); ?>" size="40" class="<?php echo $verificar_2; ?>">
<input type="text" name="respuesta_3" id="respuesta_3" value="<?php echo htmlspecialchars($respuesta_3); ?>" size="22" class="<?php echo $verificar_3; ?>">
<input type="text" name="respuesta_4" id="respuesta_4" value="<?php echo htmlspecialchars($respuesta_4); ?>" size="46" class="<?php echo $verificar_4; ?>">
<input type="text" name="respuesta_5" id="respuesta_5" value="<?php echo htmlspecialchars($respuesta_5); ?>" size="10" class="<?php echo $verificar_5; ?>">
    <input type="text" name="respuesta_6" id="respuesta_6" value="<?php echo htmlspecialchars($respuesta_6); ?>" size="50" class="<?php echo $verificar_6; ?>">
<input type="text" name="respuesta_7" id="respuesta_7" value="<?php echo htmlspecialchars($respuesta_7); ?>" size="34" class="<?php echo $verificar_7; ?>">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_1 ?>
    <?php echo $verificar_2 ?>
    <?php echo $verificar_3 ?>
    <?php echo $verificar_4 ?>
    <?php echo $verificar_5 ?>
    <?php echo $verificar_6 ?>
    <?php echo $verificar_7 ?>  
    <hr>

    <h2>Componente y Estados</h2>
    <pre>
<input type="text" name="respuesta_8" id="respuesta_8" value="<?php echo htmlspecialchars($respuesta_8); ?>" size="36" class="<?php echo $verificar_8; ?>">
    <input type="text" name="respuesta_9" id="respuesta_9" value="<?php echo htmlspecialchars($respuesta_9); ?>" size="42" class="<?php echo $verificar_9; ?>">
    <input type="text" name="respuesta_10" id="respuesta_10" value="<?php echo htmlspecialchars($respuesta_10); ?>" size="38" class="<?php echo $verificar_10; ?>">
        <input type="text" name="respuesta_11" id="respuesta_11" value="<?php echo htmlspecialchars($respuesta_11); ?>" size="90" class="<?php echo $verificar_11; ?>">
    <input type="text" name="respuesta_12" id="respuesta_12" value="<?php echo htmlspecialchars($respuesta_12); ?>" size="6" class="<?php echo $verificar_12; ?>">
    <input type="text" name="respuesta_13" id="respuesta_13" value="<?php echo htmlspecialchars($respuesta_13); ?>" size="44" class="<?php echo $verificar_13; ?>">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_8 ?>
    <?php echo $verificar_9 ?>
    <?php echo $verificar_10 ?>
    <?php echo $verificar_11 ?> 
    <?php echo $verificar_12 ?>
    <?php echo $verificar_13 ?>
    <hr>

    <h2>useEffect</h2>
    <pre>
    <input type="text" name="respuesta_14" id="respuesta_14" value="<?php echo htmlspecialchars($respuesta_14); ?>" size="20" class="<?php echo $verificar_14; ?>">
        <input type="text" name="respuesta_15" id="respuesta_15" value="<?php echo htmlspecialchars($respuesta_15); ?>" size="34" class="<?php echo $verificar_15; ?>">
            <input type="text" name="respuesta_16" id="respuesta_16" value="<?php echo htmlspecialchars($respuesta_16); ?>" size="8" class="<?php echo $verificar_16; ?>">
                <input type="text" name="respuesta_17" id="respuesta_17" value="<?php echo htmlspecialchars($respuesta_17); ?>" size="40" class="<?php echo $verificar_17; ?>">
                <input type="text" name="respuesta_18" id="respuesta_18" value="<?php echo htmlspecialchars($respuesta_18); ?>" size="20" class="<?php echo $verificar_18; ?>">
            <input type="text" name="respuesta_19" id="respuesta_19" value="<?php echo htmlspecialchars($respuesta_19); ?>" size="24" class="<?php echo $verificar_19; ?>">
                <input type="text" name="respuesta_20" id="respuesta_20" value="<?php echo htmlspecialchars($respuesta_20); ?>" size="28" class="<?php echo $verificar_20; ?>">
            <input type="text" name="respuesta_21" id="respuesta_21" value="<?php echo htmlspecialchars($respuesta_21); ?>" size="4" class="<?php echo $verificar_21; ?>">
        <input type="text" name="respuesta_22" id="respuesta_22" value="<?php echo htmlspecialchars($respuesta_22); ?>" size="4" class="<?php echo $verificar_22; ?>">
        <input type="text" name="respuesta_23" id="respuesta_23" value="<?php echo htmlspecialchars($respuesta_23); ?>" size="14" class="<?php echo $verificar_23; ?>">
    <input type="text" name="respuesta_24" id="respuesta_24" value="<?php echo htmlspecialchars($respuesta_24); ?>" size="10" class="<?php echo $verificar_24; ?>">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_14 ?>
    <?php echo $verificar_15 ?>
    <?php echo $verificar_16 ?>
    <?php echo $verificar_17 ?>
    <?php echo $verificar_18 ?>
    <?php echo $verificar_19 ?> 
    <?php echo $verificar_20 ?>
    <?php echo $verificar_21 ?>
    <?php echo $verificar_22 ?>
    <?php echo $verificar_23 ?>
    <?php echo $verificar_24 ?>
    <hr>

    <h2>handleCreateGame</h2>
    <pre>
    <input type="text" name="respuesta_25" id="respuesta_25" value="<?php echo htmlspecialchars($respuesta_25); ?>" size="38" class="<?php echo $verificar_25; ?>">
        <input type="text" name="respuesta_26" id="respuesta_26" value="<?php echo htmlspecialchars($respuesta_26); ?>" size="8" class="<?php echo $verificar_26; ?>">
            <input type="text" name="respuesta_27" id="respuesta_27" value="<?php echo htmlspecialchars($respuesta_27); ?>" size="44" class="<?php echo $verificar_27; ?>">
                <input type="text" name="respuesta_28" id="respuesta_28" value="<?php echo htmlspecialchars($respuesta_28); ?>" size="12" class="<?php echo $verificar_28; ?>">
                <input type="text" name="respuesta_29" id="respuesta_29" value="<?php echo htmlspecialchars($respuesta_29); ?>" size="44" class="<?php echo $verificar_29; ?>">
                <input type="text" name="respuesta_30" id="respuesta_30" value="<?php echo htmlspecialchars($respuesta_30); ?>" size="44" class="<?php echo $verificar_30; ?>">
            <input type="text" name="respuesta_31" id="respuesta_31" value="<?php echo htmlspecialchars($respuesta_31); ?>" size="6" class="<?php echo $verificar_31; ?>">
            <input type="text" name="respuesta_32" id="respuesta_32" value="<?php echo htmlspecialchars($respuesta_32); ?>" size="48" class="<?php echo $verificar_32; ?>">
            <input type="text" name="respuesta_33" id="respuesta_33" value="<?php echo htmlspecialchars($respuesta_33); ?>" size="92" class="<?php echo $verificar_33; ?>">
        <input type="text" name="respuesta_34" id="respuesta_34" value="<?php echo htmlspecialchars($respuesta_34); ?>" size="48" class="<?php echo $verificar_34; ?>">
    <input type="text" name="respuesta_35" id="respuesta_35" value="<?php echo htmlspecialchars($respuesta_35); ?>" size="4" class="<?php echo $verificar_35; ?>">
</pre>
    <button type="submit">Verificar</button>
     <?php echo $verificar_25 ?>
    <?php echo $verificar_26 ?>
    <?php echo $verificar_27 ?>
    <?php echo $verificar_28 ?>
    <?php echo $verificar_29 ?>
    <?php echo $verificar_30 ?>
    <?php echo $verificar_31 ?>
    <?php echo $verificar_32 ?>
    <?php echo $verificar_33 ?>
    <?php echo $verificar_34 ?>
    <?php echo $verificar_35 ?>
    <hr>

    <h2>handleDeleteGame</h2>
    <pre>
    <input type="text" name="respuesta_36" id="respuesta_36" value="<?php echo htmlspecialchars($respuesta_36); ?>" size="40" class="<?php echo $verificar_36; ?>">
        <input type="text" name="respuesta_37" id="respuesta_37" value="<?php echo htmlspecialchars($respuesta_37); ?>" size="8" class="<?php echo $verificar_37; ?>">
            <input type="text" name="respuesta_38" id="respuesta_38" value="<?php echo htmlspecialchars($respuesta_38); ?>" size="24" class="<?php echo $verificar_38; ?>">
            <input type="text" name="respuesta_39" id="respuesta_39" value="<?php echo htmlspecialchars($respuesta_39); ?>" size="58" class="<?php echo $verificar_39; ?>">
        <input type="text" name="respuesta_40" id="respuesta_40" value="<?php echo htmlspecialchars($respuesta_40); ?>" size="48" class="<?php echo $verificar_40; ?>">
    <input type="text" name="respuesta_41" id="respuesta_41" value="<?php echo htmlspecialchars($respuesta_41); ?>" size="4" class="<?php echo $verificar_41; ?>">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_36 ?>
    <?php echo $verificar_37 ?>
    <?php echo $verificar_38 ?>
    <?php echo $verificar_39 ?>
    <?php echo $verificar_40 ?>
    <?php echo $verificar_41 ?>

    <hr>

    <h2>handleUpdateGame</h2>
    <pre>
    <input type="text" name="respuesta_42" id="respuesta_42" value="<?php echo htmlspecialchars($respuesta_42); ?>" size="38" class="<?php echo $verificar_42; ?>">
        <input type="text" name="respuesta_43" id="respuesta_43" value="<?php echo htmlspecialchars($respuesta_43); ?>" size="8" class="<?php echo $verificar_43; ?>">
            <input type="text" name="respuesta_44" id="respuesta_44" value="<?php echo htmlspecialchars($respuesta_44); ?>" size="52" class="<?php echo $verificar_44; ?>">
                <input type="text" name="respuesta_45" id="respuesta_45" value="<?php echo htmlspecialchars($respuesta_45); ?>" size="12" class="<?php echo $verificar_45; ?>">
                <input type="text" name="respuesta_46" id="respuesta_46" value="<?php echo htmlspecialchars($respuesta_46); ?>" size="44" class="<?php echo $verificar_46; ?>">
                <input type="text" name="respuesta_47" id="respuesta_47" value="<?php echo htmlspecialchars($respuesta_47); ?>" size="44" class="<?php echo $verificar_47; ?>">
            <input type="text" name="respuesta_48" id="respuesta_48" value="<?php echo htmlspecialchars($respuesta_48); ?>" size="6" class="<?php echo $verificar_48; ?>">
            <input type="text" name="respuesta_49" id="respuesta_49" value="<?php echo htmlspecialchars($respuesta_49); ?>" size="80" class="<?php echo $verificar_49; ?>">
            <input type="text" name="respuesta_50" id="respuesta_50" value="<?php echo htmlspecialchars($respuesta_50); ?>" size="24" class="<?php echo $verificar_50; ?>">
            <input type="text" name="respuesta_51" id="respuesta_51" value="<?php echo htmlspecialchars($respuesta_51); ?>" size="92" class="<?php echo $verificar_51; ?>">
        <input type="text" name="respuesta_52" id="respuesta_52" value="<?php echo htmlspecialchars($respuesta_52); ?>" size="48" class="<?php echo $verificar_52; ?>">
    <input type="text" name="respuesta_53" id="respuesta_53" value="<?php echo htmlspecialchars($respuesta_53); ?>" size="4" class="<?php echo $verificar_53; ?>">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_42 ?>
    <?php echo $verificar_43 ?>
    <?php echo $verificar_44 ?>  
    <?php echo $verificar_45 ?>
    <?php echo $verificar_46 ?>
    <?php echo $verificar_47 ?>
    <?php echo $verificar_48 ?>
    <?php echo $verificar_49 ?>
    <?php echo $verificar_50 ?>
    <?php echo $verificar_51 ?>
    <?php echo $verificar_52 ?>
    <?php echo $verificar_53 ?>
    <hr>
   
</div>




<div class="seccion derecha">
    
    <h2>handleEditClick</h2>
    <pre>
    <input type="text" name="respuesta_54" id="respuesta_54" value="<?php echo htmlspecialchars($respuesta_54); ?>" size="36" class="<?php echo $verificar_54; ?>">
        <input type="text" name="respuesta_55" id="respuesta_55" value="<?php echo htmlspecialchars($respuesta_55); ?>" size="24" class="<?php echo $verificar_55; ?>">
        <input type="text" name="respuesta_56" id="respuesta_56" value="<?php echo htmlspecialchars($respuesta_56); ?>" size="16" class="<?php echo $verificar_56; ?>">
            <input type="text" name="respuesta_57" id="respuesta_57" value="<?php echo htmlspecialchars($respuesta_57); ?>" size="52" class="<?php echo $verificar_57; ?>">
            <input type="text" name="respuesta_58" id="respuesta_58" value="<?php echo htmlspecialchars($respuesta_58); ?>" size="56" class="<?php echo $verificar_58; ?>">
            <input type="text" name="respuesta_59" id="respuesta_59" value="<?php echo htmlspecialchars($respuesta_59); ?>" size="48" class="<?php echo $verificar_59; ?>">
        <input type="text" name="respuesta_60" id="respuesta_60" value="<?php echo htmlspecialchars($respuesta_60); ?>" size="6" class="<?php echo $verificar_60; ?>">
    <input type="text" name="respuesta_61" id="respuesta_61" value="<?php echo htmlspecialchars($respuesta_61); ?>" size="4" class="<?php echo $verificar_61; ?>">
</pre>
    <button type="submit">Verificar</button>
    <?php echo $verificar_54 ?>
    <?php echo $verificar_55 ?>
    <?php echo $verificar_56 ?>
    <?php echo $verificar_57 ?>
    <?php echo $verificar_58 ?>
    <?php echo $verificar_59 ?>
    <?php echo $verificar_60 ?>
    <?php echo $verificar_61 ?>
    <hr>

    <h2>return JSX</h2>
    <pre>
    <input type="text" name="respuesta_62" id="respuesta_62" value="<?php echo htmlspecialchars($respuesta_62); ?>" size="12" class="<?php echo $verificar_62; ?>">
        <input type="text" name="respuesta_63" id="respuesta_63" value="<?php echo htmlspecialchars($respuesta_63); ?>" size="100" class="<?php echo $verificar_63; ?>">
            <input type="text" name="respuesta_64" id="respuesta_64" value="<?php echo htmlspecialchars($respuesta_64); ?>" size="56" class="<?php echo $verificar_64; ?>">
            <input type="text" name="respuesta_65" id="respuesta_65" value="<?php echo htmlspecialchars($respuesta_65); ?>" size="14" class="<?php echo $verificar_65; ?>">
            <input type="text" name="respuesta_66" id="respuesta_66" value="<?php echo htmlspecialchars($respuesta_66); ?>" size="72" class="<?php echo $verificar_66; ?>">
                <input type="text" name="respuesta_67" id="respuesta_67" value="<?php echo htmlspecialchars($respuesta_67); ?>" size="46" class="<?php echo $verificar_67; ?>">
                    <input type="text" name="respuesta_68" id="respuesta_68" value="<?php echo htmlspecialchars($respuesta_68); ?>" size="58" class="<?php echo $verificar_68; ?>">
                <input type="text" name="respuesta_69" id="respuesta_69" value="<?php echo htmlspecialchars($respuesta_69); ?>" size="52" class="<?php echo $verificar_69; ?>">
                    <input type="text" name="respuesta_70" id="respuesta_70" value="<?php echo htmlspecialchars($respuesta_70); ?>" size="66" class="<?php echo $verificar_70; ?>">
                <input type="text" name="respuesta_71" id="respuesta_71" value="<?php echo htmlspecialchars($respuesta_71); ?>" size="58" class="<?php echo $verificar_71; ?>">
                    <input type="text" name="respuesta_72" id="respuesta_72" value="<?php echo htmlspecialchars($respuesta_72); ?>" size="66" class="<?php echo $verificar_72; ?>">
                <input type="text" name="respuesta_73" id="respuesta_73" value="<?php echo htmlspecialchars($respuesta_73); ?>" size="58" class="<?php echo $verificar_73; ?>">
                    <input type="text" name="respuesta_74" id="respuesta_74" value="<?php echo htmlspecialchars($respuesta_74); ?>" size="66" class="<?php echo $verificar_74; ?>">
                <input type="text" name="respuesta_75" id="respuesta_75" value="<?php echo htmlspecialchars($respuesta_75); ?>" size="48" class="<?php echo $verificar_75; ?>">
                    <input type="text" name="respuesta_76" id="respuesta_76" value="<?php echo htmlspecialchars($respuesta_76); ?>" size="62" class="<?php echo $verificar_76; ?>">
                <input type="text" name="respuesta_77" id="respuesta_77" value="<?php echo htmlspecialchars($respuesta_77); ?>" size="18" class="<?php echo $verificar_77; ?>">
                    <input type="text" name="respuesta_78" id="respuesta_78" value="<?php echo htmlspecialchars($respuesta_78); ?>" size="84" class="<?php echo $verificar_78; ?>">
                <input type="text" name="respuesta_79" id="respuesta_79" value="<?php echo htmlspecialchars($respuesta_79); ?>" size="6" class="<?php echo $verificar_79; ?>">
                    <input type="text" name="respuesta_80" id="respuesta_80" value="<?php echo htmlspecialchars($respuesta_80); ?>" size="70" class="<?php echo $verificar_80; ?>">
                <input type="text" name="respuesta_81" id="respuesta_81" value="<?php echo htmlspecialchars($respuesta_81); ?>" size="4" class="<?php echo $verificar_81; ?>">
            <input type="text" name="respuesta_82" id="respuesta_82" value="<?php echo htmlspecialchars($respuesta_82); ?>" size="8" class="<?php echo $verificar_82; ?>">
            <input type="text" name="respuesta_83" id="respuesta_83" value="<?php echo htmlspecialchars($respuesta_83); ?>" size="18" class="<?php echo $verificar_83; ?>">
            <input type="text" name="respuesta_84" id="respuesta_84" value="<?php echo htmlspecialchars($respuesta_84); ?>" size="74" class="<?php echo $verificar_84; ?>">
                <input type="text" name="respuesta_85" id="respuesta_85" value="<?php echo htmlspecialchars($respuesta_85); ?>" size="30" class="<?php echo $verificar_85; ?>">
                    <input type="text" name="respuesta_86" id="respuesta_86" value="<?php echo htmlspecialchars($respuesta_86); ?>" size="72" class="<?php echo $verificar_86; ?>">
                        <input type="text" name="respuesta_87" id="respuesta_87" value="<?php echo htmlspecialchars($respuesta_87); ?>" size="54" class="<?php echo $verificar_87; ?>">
                        <input type="text" name="respuesta_88" id="respuesta_88" value="<?php echo htmlspecialchars($respuesta_88); ?>" size="46" class="<?php echo $verificar_88; ?>">
                        <input type="text" name="respuesta_89" id="respuesta_89" value="<?php echo htmlspecialchars($respuesta_89); ?>" size="64" class="<?php echo $verificar_89; ?>">
                        <input type="text" name="respuesta_90" id="respuesta_90" value="<?php echo htmlspecialchars($respuesta_90); ?>" size="46" class="<?php echo $verificar_90; ?>">
                        <input type="text" name="respuesta_91" id="respuesta_91" value="<?php echo htmlspecialchars($respuesta_91); ?>" size="44" class="<?php echo $verificar_91; ?>">
                        <input type="text" name="respuesta_92" id="respuesta_92" value="<?php echo htmlspecialchars($respuesta_92); ?>" size="46" class="<?php echo $verificar_92; ?>">
                            <input type="text" name="respuesta_93" id="respuesta_93" value="<?php echo htmlspecialchars($respuesta_93); ?>" size="90" class="<?php echo $verificar_93; ?>">
                            <input type="text" name="respuesta_94" id="respuesta_94" value="<?php echo htmlspecialchars($respuesta_94); ?>" size="90" class="<?php echo $verificar_94; ?>">
                        <input type="text" name="respuesta_95" id="respuesta_95" value="<?php echo htmlspecialchars($respuesta_95); ?>" size="8" class="<?php echo $verificar_95; ?>">
                    <input type="text" name="respuesta_96" id="respuesta_96" value="<?php echo htmlspecialchars($respuesta_96); ?>" size="8" class="<?php echo $verificar_96; ?>">
                <input type="text" name="respuesta_97" id="respuesta_97" value="<?php echo htmlspecialchars($respuesta_97); ?>" size="6" class="<?php echo $verificar_97; ?>">
            <input type="text" name="respuesta_98" id="respuesta_98" value="<?php echo htmlspecialchars($respuesta_98); ?>" size="8" class="<?php echo $verificar_98; ?>">
        <input type="text" name="respuesta_99" id="respuesta_99" value="<?php echo htmlspecialchars($respuesta_99); ?>" size="8" class="<?php echo $verificar_99; ?>">
    <input type="text" name="respuesta_100" id="respuesta_100" value="<?php echo htmlspecialchars($respuesta_100); ?>" size="6" class="<?php echo $verificar_100; ?>">
<input type="text" name="respuesta_101" id="respuesta_101" value="<?php echo htmlspecialchars($respuesta_101); ?>" size="2" class="<?php echo $verificar_101; ?>">
</pre>
    <button type="submit">Verificar</button>
  <?php echo $verificar_62 ?>
    <?php echo $verificar_63 ?>
    <?php echo $verificar_64 ?>
    <?php echo $verificar_65 ?>
    <?php echo $verificar_66 ?>

    <?php echo $verificar_67 ?>
<?php echo $verificar_68 ?>
<?php echo $verificar_69 ?>
<?php echo $verificar_70 ?>
<?php echo $verificar_71 ?>
<?php echo $verificar_72 ?>
<?php echo $verificar_73 ?>
<?php echo $verificar_74 ?>
<br>
<?php echo $verificar_75 ?>
<?php echo $verificar_76 ?>
<?php echo $verificar_77 ?>
<?php echo $verificar_78 ?>
<?php echo $verificar_79 ?>
<?php echo $verificar_80 ?>
<?php echo $verificar_81 ?>
<?php echo $verificar_82 ?>
<?php echo $verificar_83 ?>
<?php echo $verificar_84 ?>
<?php echo $verificar_85 ?>
<?php echo $verificar_86 ?>
<?php echo $verificar_87 ?>
<?php echo $verificar_88 ?>
<br>
<?php echo $verificar_89 ?>
<?php echo $verificar_90 ?>
<?php echo $verificar_91 ?>
<?php echo $verificar_92 ?>
<?php echo $verificar_93 ?>
<?php echo $verificar_94 ?>
<?php echo $verificar_95 ?>
<?php echo $verificar_96 ?>
<?php echo $verificar_97 ?>
<?php echo $verificar_98 ?>
<?php echo $verificar_99 ?>
<?php echo $verificar_100 ?>
<?php echo $verificar_101 ?>
 
    <hr>
    <strong>si desea ver las soluciones escribir: mostrar_solucion</strong>
    <br>
    <input type="text" id="mostrar_solucion" name="mostrar_solucion"  value="<?php echo $mostrar_solucion?>">
    <button type="submit"   >Mostrar Solución</button>
         
</div>
</div>
 </form>
<div class="centered-container">
    <a
        name="siguiente"
        id="siguiente"
        class="btn btn-primary"
        href="segundo.php"
        role="button"
        width="50px"
        height="50px"
    >Siguiente</a>
</div>
</body>
</html>
