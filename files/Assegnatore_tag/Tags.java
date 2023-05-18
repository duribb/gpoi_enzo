package enzo;

import java.util.ArrayList;

public class Tags {
    private ArrayList<String> tag = new ArrayList<>();




    public ArrayList<String> getTag() {
        return tag;
    }


    public void setTag(String tag) {
        System.out.println("Il tag che ho ricevuto e': " + tag);
        this.tag.add(tag);
    }

}
