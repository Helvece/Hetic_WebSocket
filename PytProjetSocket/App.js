import { StatusBar } from 'expo-status-bar';
import { StyleSheet, View } from 'react-native';
import UserCard from './Components/User/UserCard';
import UserResearch from './Components/User/UserResearch'
export default function App() {
  const users = ['Salma', 'Valerie', 'Lucas', 'Justine'];
  return (
    <View style={styles.container}>
      <UserResearch users={users}/>
      <StatusBar style="auto" />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
