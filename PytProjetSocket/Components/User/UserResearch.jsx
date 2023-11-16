import UserCard from './UserCard'
import * as React from 'react';
import { Searchbar } from 'react-native-paper';
import { View, Text } from "react-native";

const UserResearch = (Props) => {
    
    const [searchQuery, setSearchQuery] = React.useState('');

    const onChangeSearch = query => setSearchQuery(query);
    return(
        <View>
            <View>
                <Searchbar
                    placeholder="Search User"
                    onChangeText={onChangeSearch}
                    value={searchQuery}
                />
            </View>
            {Props.users.map((index,value) => (
                <View key={value}>
                    <UserCard username={index}/>
                </View>
            ))}
        </View>
    );
};
export default UserResearch;